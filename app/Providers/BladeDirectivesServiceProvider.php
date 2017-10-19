<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeDirectivesServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::if('reference', function () {
            $reference = \App\Reference::where( 'referencable_id', auth()->user()->userable_id )
                                        ->where( 'referencable_type', auth()->user()->userable_type )
                                        ->first();
            return $reference ? true : false;
        });
    }

    public function register()
    {
        //
    }
}
