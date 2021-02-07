<?php

namespace Mypackage\providers;

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
        $this->loadRoutesFrom('routes.php');
        $this->loadMigrationsFrom('migrations');
        // $this->loadRoutesFrom(__DIR__.'./routes.php');
        // $this->loadMigrationsFrom(__DIR__.'./migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('Mypackage\controller\TaskController');
    }
}
