<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Menu_appProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        return app_path('Lib/menu_app.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
