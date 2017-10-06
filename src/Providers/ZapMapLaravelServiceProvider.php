<?php

namespace ZapMap\ZapMapLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class ZapMapLaravelServiceProvider extends ServiceProvider{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Configuration/Templates/zapmap.php' => config_path('zapmap.php')
        ], 'config');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../Configuration/Templates/zapmap.php', 'zapmap'
        );
        $this->app->bind('zapmap', function($app)
        {
            return new \ZapMap\ZapMapLaravel\ZapMap();
        });
    }

}