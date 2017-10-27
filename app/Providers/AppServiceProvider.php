<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Schema::defaultStringLength(191);
        define('DS',DIRECTORY_SEPARATOR);
    }

    public function register()
    {
        //
    }
}
