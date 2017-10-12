<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];

    public function card()
    {
        return $this->morphOne(Card::class,'cardable');
    }

    public function transactions()
    {
      return $this->hasMany(Transaction::class);
    }
}
