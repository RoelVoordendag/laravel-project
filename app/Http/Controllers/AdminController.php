<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function index(){
        $users = User::latest()->get();

        return view('admin.index', compact('users'));
    }
    public function delete(User $user){
        
        $user->delete();

        return redirect('/admin');
    }
}
