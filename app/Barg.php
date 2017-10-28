<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barg extends Model
{
    public function registered_for()
    {
        return $this->morphTo();
    }

    public function used()
    {
        $barg_number = $this->number;
        $receiver_id = auth()->user()->userable_id;
        $barg = \App\BargTransaction::where('receiver_id',$receiver_id)->where('barg_number', $barg_number)->first();
        return $barg ? true : false;
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
