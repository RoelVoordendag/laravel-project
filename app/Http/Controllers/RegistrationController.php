<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Loan;

use App\User;

class RegistrationController extends Controller
{
    //linken naar view van registration form
    public function create(){
        $loans = Loan::all();

        return view('registration.register', compact('loans'));
    }
    //pushing database to server
    public function store(Request $request){

        //validating data
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'date'  =>  'required|date',
            'section' => 'required',
            'loanclass' => 'required',
            'password' => 'required|confirmed'
        ]); 
        
        
        $user = User::create(request(['name', 'email', 'phonenumber', 'date', 'section', 'role', 'password']));
        $user->password = bcrypt($user->password);

    
        $user->loans()->attach($request->loanclass);

        $user->save();
        
        //redirecting to home page
        return redirect('/admin'); 
        
    }
}
