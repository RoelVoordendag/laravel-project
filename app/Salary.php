<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';
    protected $fillable = [
        'user_id', 'hours', 'week'
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
