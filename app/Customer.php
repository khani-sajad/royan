<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];

    public function card()
    {
        return \App\Card::where('cardable_id',$this->id)->where('cardable_type', 'Customer')->first();
    }

}
