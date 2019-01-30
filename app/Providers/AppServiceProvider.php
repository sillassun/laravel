<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// to solve user table problem
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //to solve user table problem
        Schema::defaultStringLength(191);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
