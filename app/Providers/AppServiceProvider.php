<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\HeaderComposer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider

{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('layouts.header', function ($view) {
            $data = array();
            if (Session::has('USERNAME_CUST') || isset($_COOKIE['USERNAME_CUST'])) {
                if (Session::has('USERNAME_CUST')) {
                    $username = Session::get('USERNAME_CUST');
                } else {
                    // $username = $_COOKIE['USERNAME_CUST'];
                    $username = Cookie::get('USERNAME_CUST');
                    // dd($username);
                }

                $data = DB::select("
                SELECT c.NAME_CUST, QTY_WISHLIST,  QTY_CART
                FROM customer c, wishlist w, cart ca
                WHERE w.ID_WISHLIST= c.ID_WISHLIST
                AND ca.ID_CART= c.ID_CART AND
                 USERNAME_CUST = '$username';");
            }
            $view->with('data', $data);
        });
    }
}
