<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Searchable;
    protected $fillable = [
        'name', 'email', 'phonenumber', 'date', 'section', 'role', 'password'
    ];
    // hide password form json output
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function salaryInput(){
        return $this->hasMany('App\Salary');
    }
}
