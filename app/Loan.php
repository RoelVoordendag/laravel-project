<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'classes'
    ];
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
