<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'entity' => ['required'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user = User::create([
        //     'username' => strtoupper($request->username),
        //     'email' => strtoupper($request->email),
        //     'password' => Hash::make($request->password),
        // ]);

        // create a new user instance model 
        $user = new User;
        $user->username  = strtoupper($request->username);
        $user->email     = strtoupper($request->email);
        $user->user_role = $request->entity;
        $user->password  = Hash::make($request->password);

        if ($user->save()) {

            event(new Registered($user));

            Auth::login($user);

            return redirect('/profile');

            //return redirect(RouteServiceProvider::HOME);

        } else {
            echo "Failed to insert user";
        }

        
    }
}
