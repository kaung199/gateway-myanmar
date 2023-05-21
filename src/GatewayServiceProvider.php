<?php

namespace Hak\GatewayMyanmar;

use Hak\GatewayMyanmar\Gateway;
use Illuminate\Support\ServiceProvider;

class GatewayServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/gateway.php' => config_path('gateway.php'),
            ], 'gateway');
        }

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gateway.php', 'gateway');

        $this->app->singleton('Gateway', function($app){
            return new Gateway();
        });
    }
}