<?php

namespace App\Http\Controllers;

use App\User;

class SessionsController extends Controller
{
    public function create(){

        return view('login.create');
        
    }
}
