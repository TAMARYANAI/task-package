<?php

namespace Mypackage;

use Illuminate\Support\ServiceProvider;

class MyPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom('packages/rlpackages/mypackage/src/routes.php');
        $this->loadMigrationsFrom('packages/rlpackages/mypackage/src/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->make('wisdmLabs\todolist\TodolistController')
    }
}
