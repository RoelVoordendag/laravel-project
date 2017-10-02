<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function index(){
        $users = User::latest()->get();

        return view('admin.index', compact('users'));
    }
}
    