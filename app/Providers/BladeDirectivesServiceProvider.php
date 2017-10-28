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
            $reference = \App\Reference::where( 'referencable_id', auth()->user()->userable_id )
                                        ->where( 'referencable_type', auth()->user()->userable_type )
                                        ->first();
            return $reference ? true : false ;
        });

        //admin
        Blade::if('admin', function () {
            return ra(auth()->user()->userable_type) == 'admin' ;
        });

        //receiver
        Blade::if('receiver', function () {
            return ra(auth()->user()->userable_type) == 'receiver' ;
        });

        //legal
        Blade::if('legal', function () {
            return ra(auth()->user()->userable_type) == 'legal' ;
        });

        //customer
        Blade::if('customer', function () {
            return ra(auth()->user()->userable_type) == 'customer' ;
        });
    }

    public function register()
    {
        //
    }
}
