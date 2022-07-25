<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('*', function($view)
        // {

        //     $status = Auth::user()->user_status;

        //     View::share('status', $status);

        // });

        View::composer('*', function($view)
        {
            if (Auth::check()) {
                $user_role  = Auth::user()->user_role;
                Log::info('$user_role :', [$user_role]);

                if ($user_role == 1) {

                    $count_notifications = DB::table('notification')
                    ->where([
                        ['notification_status', '=', "UNREAD"],
                    ])
                    ->count();

                    $notifications = DB::table('notification')
                    ->join('users', 'users.id', '=', 'notification.fk_user')
                    ->select('notification.*', 'users.first_name', 'users.last_name', 'users.business_name', 'users.user_role')
                    ->where([
                        ['notification_status', '=', 'UNREAD'],
                    ])
                    ->get();

                    $data = array(
                        'count_notifications' => $count_notifications,
                        'notifications'       => $notifications
                    );

                    View::share('data', $data);

                } else if ($user_role == 2 || $user_role == 3) {

                    $count_notifications = DB::table('notification')
                    ->join('auction', 'notification.fk_auction', '=', 'auction.id')
                    ->where([
                        ['notification_status', '=', "UNREAD"],
                        ['auction.fk_user', '=', Auth::user()->id],

                    ])
                    ->count();

                    $notifications = DB::table('notification')
                    ->join('users', 'users.id', '=', 'notification.fk_user')
                    ->join('auction', 'notification.fk_auction', '=', 'auction.id')
                    ->select('notification.*', 'users.first_name', 'users.last_name', 'users.business_name', 'users.user_role', 'auction.product_name')
                    ->where([
                        ['notification_status', '=', 'UNREAD'],
                        ['auction.fk_user', '=', Auth::user()->id],
                    ])
                    ->get();

                    $data = array(
                        'count_notifications' => $count_notifications,
                        'notifications'       => $notifications
                    );

                    View::share('data', $data);

                }

            }
        });
    }
}
