<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Salary extends Model
{
    use Searchable;
        
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
