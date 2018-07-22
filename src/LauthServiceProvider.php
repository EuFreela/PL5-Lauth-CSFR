<?php

namespace Lameck\Lauth;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema; 


class LauthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); 
        $this->loadRoutesFrom (__DIR__."/routes/web.php");
        $this->loadViewsFrom (__DIR__."/./../resources/views","Lameck\Lauth");
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublishables();
    }


    public function registerPublishables()
    {
        $path = dirname(__DIR__);
        $publishable = 
        [
            'migrations' => [
                $path . "/publishable/database/migrations" => database_path('migrations')
            ],
            'seeds' => [
                $path . "/publishable/database/seeds" => database_path('seeds'),
            ],
            'template' => [
                $path . "/publishable/layout/login_v15" => public_path('lameck/layout/login_v15'),
            ],
            'config' => [
                $path . "/publishable/config/lauth.php" => config_path('lauth.php'),
            ],
            
        ];
        foreach($publishable as $group => $paths){
            $this->publishes($paths,$group);
        }
    }
}
