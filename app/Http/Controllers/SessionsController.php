<?php

namespace App\Http\Controllers;

use App\User;

class SessionsController extends Controller
{
    //to create page
    public function create(){

        return view('login.create');

    }
    
    public function store(){



    }
    //logout function
    public function destroy(){p

        auth()->logout();

        return redirect()->home();
    }
}

