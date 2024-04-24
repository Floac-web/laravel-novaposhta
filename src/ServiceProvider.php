<?php

namespace Floac\Novaposhta;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/novaposhta.php', 'novaposhta');

        $this->publishes([
            __DIR__ . '/../config/novaposhta.php' => config_path('novaposhta.php')
        ]);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
