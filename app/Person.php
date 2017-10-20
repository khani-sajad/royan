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

    public function bargs()
    {
        return $this->morphMany(Barg::class,'registered_for');
    }

    public function references()
    {
        return $this->morphMany(Reference::class,'referencable');
    }

    public function transactions()
    {
      return $this->hasMany(Transaction::class);
    }
}
