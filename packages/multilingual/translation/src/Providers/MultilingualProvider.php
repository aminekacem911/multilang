<?php

namespace Multilingual\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class MultilingualProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
      
    }
}
