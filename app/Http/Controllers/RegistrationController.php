<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.register');
    }
    public function store(){
        
    }
}
