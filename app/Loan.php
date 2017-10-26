<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Loan extends Model
{
    use Searchable;

    protected $fillable = [
        'classes'
    ];
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
