<?php

namespace linking\Master;

use Illuminate\Support\ServiceProvider;

class MasterServiceProvider extends ServiceProvider{


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views","master");
        $this->loadViewsFrom(__DIR__."/views/layouts","pro");
        $this->loadMigrationsFrom(__DIR__."/databases/migrations");

        $this->publishes([
            __DIR__.'/img' => public_path('img'),
        ], 'public');
    }



    public function register()
    {
        
    }
}



?>