<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeDirectivesServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //reference
        Blade::if('reference', function () {
            $reference = \App\Reference::where( 'referencable_id', userable_id() )
                                        ->where( 'referencable_type', auth()->user()->userable_type )
                                        ->first();
            return $reference ? true : false ;
        });

        //admin
        Blade::if('admin', function () {
            return userable_type() == 'admin' ;
        });

        //receiver
        Blade::if('receiver', function () {
            return userable_type() == 'receiver' ;
        });

        //legal
        Blade::if('legal', function () {
            return userable_type() == 'legal' ;
        });

        //customer
        Blade::if('customer', function () {
            return userable_type() == 'customer' ;
        });
    }

    public function register()
    {
        //
    }
}
