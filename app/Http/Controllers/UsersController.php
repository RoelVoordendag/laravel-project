<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();

        return view('users.index', compact('users'));
    }
    public function homepageHandler()
    {
        if(!Auth::check() ){
            return redirect('/login');
            }
        return redirect('/user');
    }
}
