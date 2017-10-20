<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barg extends Model
{
    public function registered_for()
    {
        return $this->morphTo();
    }
}
