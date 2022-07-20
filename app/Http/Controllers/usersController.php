<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class usersController extends Controller
{
    // update profile for entity
    public function updateProfile(Request $request) 
    {

        // check entity before updating settings 
        if (Auth::user()->user_role == 2) {

            // validate form 
            // $request->validate([
            //     'business_name'  => ['required', 'string', 'max:50'],
            //     'brella_number'  => ['required', 'size:6'],
            //     'mobile'         => ['required'],
            //     'region'         => ['required'],
            //     'street_address' => ['required', 'string', 'max:255'],
            // ])->validateWithBag('profile');

            $validatedData = $request->validateWithBag('profile', [
                'business_name'  => ['required', 'string', 'max:50'],
                'brella_number'  => ['required', 'size:6'],
                'mobile'         => ['required'],
                'region'         => ['required'],
                'street_address' => ['required', 'string', 'max:255'],
            ]);

            $business_auth            = Auth::user();                  // To get the logged-in user details
            $business                 = User::find($business_auth->id); 
            $business->business_name  = strtoupper($request->input('business_name'));
            $business->brella_number  = $request->input('brella_number');
            $business->mobile         = $request->input('mobile');
            $business->region         = strtoupper($request->input('region'));
            $business->street_address = strtoupper($request->input('street_address'));

            if ($business->save()) {

                // update business status
                $affected = DB::table('users')
                ->where('id', Auth::user()->id)
                ->update(['user_status' => "ACTIVE"]);

                return redirect('/profile')->with('successUpdateProfile', 'Business information updated successfully');

            } else {
                echo 'Failed to updated information';
            }
            
        } else if (Auth::user()->user_role == 3) {

            // validate form 
            // $request->validate([
                
            // ])->validateWithBag('profile');
            
            $validatedData = $request->validateWithBag('profile', [
                'first_name' => ['required', 'string', 'max:20'],
                'last_name' => ['required', 'string', 'max:20'],
                'username' => ['required', 'string', 'max:20'],
                'mobile' => ['required', 'max:11'],
            ]);

            $personal_auth         = Auth::user();                  // To get the logged-in user details
            $personal              = User::find($personal_auth->id);  // Find the user using model and hold its reference
            $personal->first_name  = strtoupper($request->input('first_name'));
            $personal->last_name   = strtoupper($request->input('last_name'));
            $personal->username    = strtoupper($request->input('username'));
            $personal->mobile      = $request->input('mobile');

            if ($personal->save()) {

                // update personal status
                $affected = DB::table('users')
                ->where('id', Auth::user()->id)
                ->update(['user_status' => "ACTIVE"]);

                return redirect('/profile')->with('successUpdateProfile', 'Personal details updated successfully');

            } else {
                echo 'Failed to updated information';
            }

        }

    }

    // update password for entity
    public function updatePassword(Request $request)
    {
        // validate form 
        // $request->validate([
            
        // ])->validateWithBag('password');

        $validatedData = $request->validateWithBag('password', [
            'current_password' => ['required'],
            'new_password' => ['required'],
            'confirm_password' => ['required'],
        ]);

        $flag = true;

        // check if current password are the same
        if (!(Hash::check($request->input('current_password'), Auth::user()->password))) {
            $flag = false;
            return redirect('/profile')->with('errorUpdatePassword', 'Current password does not match with the password you provided!');
        }

        // check if new password is not less than six characters 
        if (strlen($request->input('new_password')) < 6) {
            $flag = false;
            return redirect('/profile')->with('errorUpdatePassword', 'New password has to be at least six characters');
        }

        // check if current and new password are the same
        if (strcmp($request->input('current_password'), $request->input('new_password')) == 0) {
            $flag = false;
            return redirect('/profile')->with('errorUpdatePassword', 'New Password cannot be same as your current password');
        }

        // check if new and confirm password are not the same 
        if (!strcmp($request->input('new_password'), $request->input('confirm_password')) == 0) {
            $flag = false;
            return redirect('/profile')->with('errorUpdatePassword', 'New Password has to match with confirm password');
        }

        // change password
        if ($flag == true) {

            $bidder_auth      = Auth::user();                 // To get the logged-in user details
            $bidder           = User::find($bidder_auth->id);  // Find the user using model and hold its reference
            $bidder->password = Hash::make($request->input('new_password'));

            if ($bidder->save()) {
                return redirect('/profile')->with("successUpdatePassword", "Password has changed successfully!");
            } else {
                echo "Failed to save";
            }

        } else {
            echo "Failed to update password (flag)";
        }

    }

    public function store(Request $request)
    {
        // validate create users form
        $request->validate([
            'entity'   => ['required', 'string', 'max:20'],
            'username' => ['required', 'string', 'max:20'],
            'email'    => ['required', 'string', 'max:20'],
            'mobile'    => ['required', 'string', 'max:20']

        ]);

        // create a new user instance model 
        $user = new User;
        $user->user_role = strtoupper($request->input("entity"));
        $user->username  = strtoupper($request->input("username"));
        $user->email     = strtoupper($request->input("email"));
        $user->mobile    = strtoupper($request->input("mobile"));

        // generate random password 
        $randomPassword = Str::random(10);
        $user->password = password_hash($randomPassword, PASSWORD_DEFAULT);
        
        if ($user->save()) {

            // data to be transfered in email
            $data = array('username' => $request->input("username"), 'email' => ucfirst($request->input('email')), 'password' => $randomPassword, 'user_role' => $request->input('entity'));

            // store email in a global variable 
            $GLOBALS['userEmail'] = $request->input('email');

            Mail::send('mail', $data, function($message) {
               $message->to($GLOBALS['userEmail'])->subject
                  ('User Credentials');
               $message->from('phpmustafa666@gmail.com', 'Bids');
            });

            return redirect('/admin/users')->with('success', 'User created successfully');

        } else {
            echo "Failed to insert user";
        }

    }

    public function activeUsers()
    {
        $users = DB::table('users')
        ->where('user_status', '=', 'ACTIVE')
        ->where(function($query) {
            $query->where('user_role', '=', 2)
                  ->orWhere('user_role', '=', 3);
        })
        ->get();

        return view('admin.users', ['users' => $users]);
    }

    public function pendingUsers()
    {
        $users = DB::table('users')
        ->where('user_status', '=', 'PENDING')
        ->where(function($query) {
            $query->where('user_role', '=', 2)
                  ->orWhere('user_role', '=', 3);
        })
        ->get();

        return view('admin.pending_users', ['users' => $users]);

    }

    public function inactiveUsers()
    {
        $users = DB::table('users')
        ->where('user_status', '=', 'INACTIVE')
        ->where(function($query) {
            $query->where('user_role', '=', 2)
                  ->orWhere('user_role', '=', 3);
        })
        ->get();

        return view('admin.inactive_users', ['users' => $users]);

    }

    public function show($id)
    {
        $user = User::find($id);
  
        return response()->json($user);
    }

    public function destroy(Request $request)
    {
        // store user id in variable 
        $user_id = $request->input('user_id');

        $updateUser = DB::table('users')
        ->where('id', '=', $user_id)
        ->update(['user_status' => 'INACTIVE']);

        return redirect('/admin/users')->with('success', 'User deleted successfully!');
        
    }

    public function editUser(Request $request)
    {
        // store user id and user role in variable 
        $user_id    = $request->input('user_id');
        $user_role  = $request->input('user_role');

        if ($user_role == 2) {

            $user = User::find($user_id);

            // update business values in appropriate columns
            $user->business_name           = strtoupper($request->input('business_name'));
            $user->brella_number           = $request->input('brella_number');
            $user->username                = strtoupper($request->input('business_username'));
            $user->mobile                  = $request->input('business_mobile');
            $user->region                  = strtoupper($request->input('business_region'));
            $user->street_address          = strtoupper($request->input('business_street_address'));

            
            // update business user in database 
            if ($user->save()) {
                return redirect('/admin/users')->with('success', 'Business user updated successfully!');
            } else {
                echo "Failed to update User";
            }
            
        } else if ($user_role == 3) {

            $user = User::find($user_id);

            // update personal values in appropriate columns
            $user->first_name          = strtoupper($request->input('first_name'));
            $user->last_name           = strtoupper($request->input('last_name'));
            $user->username            = strtoupper($request->input('personal_username'));
            $user->mobile              = $request->input('personal_mobile');

            
            // update personal user in database 
            if ($user->save()) {
                return redirect('/admin/users')->with('success', 'Personal user updated successfully!');
            } else {
                echo "Failed to update User";
            }

        }

    }
}
