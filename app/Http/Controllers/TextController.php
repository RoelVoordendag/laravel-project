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
    public function edited(Request $request , Text $text)
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' =>   'required' 
        ]);

        $text->update($request->all());

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
    public function switch(Request $request, Text $text)
    {
        if($text->switch){
            $text->update(['switch' => 0]);
            }else{
            $text->update(['switch' => 1]);
        }

        // $texts = Text::find($text->id);
        //         if($text->switch){
        //             $texts->switch = false;
        //             $texts->save();
        //             }else{
        //             $texts->switch = true;
        //             $texts->save();                
        //         }
    return redirect('/writer');    
        
    }

}
