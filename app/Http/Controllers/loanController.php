<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class loanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        
        return view('loan.index-loan', compact('loans'));
    }
    public function createpage()
    {
        return view('loan.create');
    }
    public function create(Request $request)
    {
        $this->validate(request(),[
            'loanclass' => 'required|integer',
        ]); 

        $loan = Loan::create(['classes' => $request->loanclass]);

        return redirect('/loanclasses');
    }
    public function edit(Loan $loan)
    {
        return view('loan.edit', compact('loan'));
    }
    public function edited(Request $request, Loan $loan)
    {
        $this->validate(request(),[
            'class' => 'required'
        ]);
        
        $loan->classes = $request->class;


        $loan->save();
        
        return redirect('/loanclasses');
    }
    public function delete (Loan $loan)
    {
        $loan->delete();
        
        return redirect('/loanclasses');
    }
}
