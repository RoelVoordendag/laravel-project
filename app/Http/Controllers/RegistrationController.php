<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    //linken naar view van registration form
    public function create(){
        return view('registration.register');
    }
    //pushing database to server
    public function store(){

        //validating data
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'date'  =>  'required|date',
            'section' => 'required',
            'password' => 'required|confirmed'
        ]); 

        $user = User::create(request(['name', 'email', 'phonenumber', 'date', 'section', 'password']));
        $user->password = bcrypt($user->password);

        $user->save();

        //redirecting to home page
        return redirect()->home();
        
    }
}
