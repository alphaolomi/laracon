<?php

namespace Alphaolomi\Laracon;

use Illuminate\Support\ServiceProvider;

class LaraconServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
       
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laracon', function () {
            return new Laracon;
        });
    }
}
