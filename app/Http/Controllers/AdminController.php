<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('admin.index', compact('users'));
    }
    public function delete(User $user)
    {
        
        $user->delete();

        return redirect('/admin');
    }
    //route to edit page
    public function edit(User $user)
    {
        return view('admin.edit-users', compact('user'));
    }
    //editing data in database
    public function edited(User $user)
    {
    //validating data
        $this->validate(request(),[
        'name' => 'required',
        'email' => 'required',
        'phonenumber' => 'required',
        'date'  =>  'required|date',
        'section' => 'required',
        'role'  => 'required'
        ]); 
        //getting data
        $users = User::find($user->id);

        $name = request()->input('name');

        $email = request()->input('email');

        $phonenumber = request()->input('phonenumber');

        $date = request()->input('date'); 

        $section = request()->input('section');

        $role = request()->input('role');
        //changing data
        $users->name = $name;

        $users->email = $email;

        $users->phonenumber = $phonenumber;

        $users->date = $date;

        $users->section = $section;

        $users->role = $role;
        //pushing data to server
        $users->save();

        return redirect('/admin');
        
        
    }
}
