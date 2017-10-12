<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function customer()
    {
      return $this->blongsToMany(Customer::class);
    }

    public function legal()
    {
      return $this->blongsToMany(Legal::class);
    }

    public function receiver()
    {
      return $this->blongsToMany(Receiver::class);
    }
}
