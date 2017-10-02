<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'phonenumber', 'date', 'section', 'password'
    ];
    // hide password form json output
    protected $hidden = [
        'password', 'remember_token',
    ];

}
