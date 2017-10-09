<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;

class TextController extends Controller
{
    //index page
    public function index()
    {
        $texts = Text::latest()->get();

        return view('writer.index', compact('texts'));
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
    //editing text
    public function edit(Text $text)
    {
        return view('writer.edit', compact('text'));
    }
    public function edited(Text $text)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' =>   'required' 
        ]);
        //getting data of right table
        $texts = Text::find($text->id);
        //getting data from form
        $title = request()->input('title');

        $body = request()->input('body');
        
        $texts->title = $title;
        
        $texts->body = $body;

        $texts->save();

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
    //changing status of posts
    public function switch(Text $text)
    {
    $texts = Text::find($text->id);

        if($text->switch){
            $texts->switch = false;
            $texts->save();
            }else{
            $texts->switch = true;
            $texts->save();                
        }
    return redirect('/writer');    
        
    }
    
}
