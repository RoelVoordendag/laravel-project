@extends('layouts.form.master')

@section('content')
    <div class= 'col-md-2 col-md-9'>
        <h1>{{$text->title}}</h1>
        <hr>
        <p class='content-p'>{{$text->body}}</p>
    </div>
@endsection 