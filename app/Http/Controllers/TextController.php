<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class TextController extends Controller
{
    //index page
    public function index()
    {
        $titles = Text::latest()->get();

        return view('writer.index', compact('titles'));
    }
    //linking to create page
    public function create()
    {
        return view('writer.create-text');
    }
    //detail page
    public function detail(Text $text)
    {
        return view('writer.detail', compact('text'));
        
    }
    //Deleting text
    public function delete(Text $text)
    {
        $text->delete();

        return redirect('/writer');
    }
  
    //pushing data to DB
    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' =>   'required' 
        ]);
        
        $text = Text::create(request(['title', 'body']));

        return redirect('/writer');
    }
}
