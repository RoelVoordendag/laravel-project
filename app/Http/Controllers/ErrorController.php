<?php

namespace App\Http\Controllers;

use App\User;

class ErrorController extends Controller
{
    public function errorRole()
    {
        return view('error.roleError');
    }
    public function destroy()
    {
            auth()->logout();

            return redirect('/');   
        }
    }

