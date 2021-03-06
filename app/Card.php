<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = ['id'];

    public function cardable()
    {
        return $this->morphTo();
    }

    public function credits()
    {
      return $this->hasMany(Credit::class);
    }
}
