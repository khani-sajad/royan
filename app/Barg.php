<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barg extends Model
{

    public function used()
    {
        $barg_number = $this->number;
        $receiver_id = userable_id();
        $barg = \App\BargTransaction::where('receiver_id',$receiver_id)->where('barg_number', $barg_number)->first();
        return $barg ? true : false;
    }
    
}
