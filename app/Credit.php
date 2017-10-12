<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
  public function customer()
  {
    return $this->blongsToMany(Customer::class)
  }

  public function receiver()
  {
    return $this->blongsToMany(Receiver::class)
  }

  public function legal()
  {
    return $this->blongsToMany(Legal::class)
  }

  public function network()
  {
    return $this->blongsToMany(Receiver::class)
  }
}
