<?php

namespace App\Http\Controllers;

use App\User;

class ErrorController extends Controller
{
    public function errorRole()
    {
        //The login page of laravel keeped fucking with me so i made this!
        return view('error.roleError');
    }
    public function destroy()
    {
            auth()->logout();

            return redirect('/');   
        }
    }

