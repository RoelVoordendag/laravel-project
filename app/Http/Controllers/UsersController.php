<?php

namespace App\Http\Controllers;

use App\User;
use App\Text;
use App\Salary;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index(){
        $texts = Text::latest()->get();

        return view('users.index', compact('texts'));
    }
    public function homepageHandler()
    {
        if(!Auth::check() ){
            return redirect('/login');
            }
        return redirect('/user');
    }
    public function loanHours(Request $request, User $user)
    {
        //validating request
        $this->validate(request(),[
            'week' => 'required',
            'hours' => 'required',
        ]); 

        //pushing data to many library
        $loan =  Salary::create(['user_id' => $user->id, 'hours'=>$request->hours, 'week'=>$request->week]);
     
        return redirect('/admin/loan');
    }
}
