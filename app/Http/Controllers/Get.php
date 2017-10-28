<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Get extends Controller
{
    public static function current_reference()
    {
        $type = auth()->user()->userable_type;
        $id = auth()->user()->userable_id;
        $reference = \App\Reference::where('referencable_type', $type)->where('referencable_id', $id)->first();
        return $reference;
    }
}
