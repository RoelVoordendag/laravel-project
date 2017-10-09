<?php

namespace App\Http\Controllers;

use App\User;
use App\Text;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
        $texts = Text::all();

        return view('users.index', compact('texts'));
    }
    public function homepageHandler()
    {
        if(!Auth::check() ){
            return redirect('/login');
            }
        return redirect('/user');
    }
}
