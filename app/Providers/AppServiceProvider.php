<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // test unique code directive
        Blade::directive('myDatetime', function ($expression) {
            $e = substr($expression, 1, -1);
            // return $e;
            
            $text = date("Y-m-d", strtotime($e));
            return $text;
        });
    }
}
