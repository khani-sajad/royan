<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    protected $guarded = ['id'];

    public function card()
    {
        return $this->morphOne(Card::class,'cardable');
    }
}
