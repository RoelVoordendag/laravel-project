<?php

namespace App\Http\Controllers;

use App\User;
use App\Loan;
use Illuminate\Http\Request;



class AdminController extends Controller    
{
    public function index()
    {
        $users = User::latest()->get();
        // $users = User::find(1);

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
    public function edited(Request $request, User $user)
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
      
        //changing data

        $user->update($request->all());

        $user->save();
        
        return redirect('/admin');
    }
    public function searchEngine(Request $request)
    {
        $results = User::search($request->search)->get();

        $search_term = $request->search;

        return view('admin.search-users', compact('results', 'search_term'));
    }
    public function loanInverting()
    {
        $users = User::latest()->get();

        return view('admin.loan', compact('users'));
    }
}
