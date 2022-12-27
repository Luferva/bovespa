<?php

namespace App\Providers;

use App\Models\Active;
use App\Repositories\ActiveRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind($abstract ='App\Repositories\ActiveRepositoryInterface', $concrete ='App\Repositories\ActiveRepositoryEloquent');

        $this->app->bind($abstract = 'App\Repositories\ActiveRepositoryInterface', function(){
            return new ActiveRepositoryEloquent(new Active());
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
