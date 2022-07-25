<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class notificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // fetch buy now payments 
        $notifications = DB::table('notification')
        ->join('users', 'notification.fk_user', '=', 'users.id')
        ->select('notification.*', 'users.*')
        ->get();

        return view('admin.notifications', ['notifications' => $notifications]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = DB::table('users')
        // ->join('notification', 'users.id', '=', 'notification.fk_user')
        // ->select('notification.*', 'users.*')
        // ->where('notification.fk_user', '=', $id)
        // ->get();

        $user = User::find($id);

        // $user = DB::table('notification')
        // ->join('auction', 'notification.fk_auction', '=', 'users.id')
        // ->select('notification.*', 'users.*')
        // ->get();

        $data = array(
            'user' => $user
        );
  
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function alerts()
    {
        $alerts = DB::table('notification')
        ->join('auction', 'notification.fk_auction', '=', 'auction.id')
        ->join('users', 'notification.fk_user', '=', 'users.id')
        ->select('notification.*')
        ->where('notification.fk_user', '=', Auth::user()->id)
        ->get();

        return view('my-alerts', ['alerts' => $alerts]);

    }
}
