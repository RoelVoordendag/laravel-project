<?php

namespace App\Http\Controllers;

use App\User;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    //to create page
    public function create(){

        return view('login.create');

    }
    
    public function store()
    {
        if(! auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Email or Password is not correct'
            ]);
        }
        return redirect()->home();

    }
    //logout function
    public function destroy()
    {

        auth()->logout();

        return redirect()->home();
    }
}

