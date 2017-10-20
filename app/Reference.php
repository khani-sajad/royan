<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $guarded = ['id'];

    public function referencable()
    {
        return $this->morphTo();
    }
}
