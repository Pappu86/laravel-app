<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('first_service_provider', function($app){
            dd('This is first service provider!');
        });

        app()->bind('second_service_provider', function($app){
            dd('This is second service provider!');
        });

        app()->bind('third_service_provider', function($app){
            dd('This is third service provider!');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
