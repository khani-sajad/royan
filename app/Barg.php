<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barg extends Model
{
    public function registered_for()
    {
        return $this->morphTo();
    }

    public static function unuseds()
    {
        return self::where('registered_for_type', auth()->user()->userable_type)
                    ->where('registered_for_id', auth()->user()->userable_id)
                    ->where('used', 0)
                    ->get();
    }

    public static function undedicateds()
    {
        return self::where('registered_for_type', auth()->user()->userable_type)
                    ->where('registered_for_id', auth()->user()->userable_id)
                    ->where('reference_id', NULL)
                    ->get();
    }

    public static function first_unused()
    {
        return self::where('registered_for_type', auth()->user()->userable_type)
                    ->where('registered_for_id', auth()->user()->userable_id)
                    ->where('used', 0)
                    ->first();
    }

    public static function first_undedicated()
    {
        return self::where('registered_for_type', auth()->user()->userable_type)
                    ->where('registered_for_id', auth()->user()->userable_id)
                    ->where('reference_id', NULL)
                    ->first();
    }
}
