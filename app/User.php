<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'remember_token',
    ];

    public static function is_admin()
    {
        return ra(auth()->user()->userable_type) == 'admin' ;
    }
}
