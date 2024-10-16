<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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
        View::composer('*', function ($view) {
            $cartItems = Auth::check() ? Auth::user()->activeCart()->items : collect(); 
            $view->with('cartItems', $cartItems); 
        });
    }
    
}
class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/homepage';
}