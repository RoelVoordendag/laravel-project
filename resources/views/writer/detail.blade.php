@extends('layouts.form.master')

@section('content')
<div class= 'col-md-2 col-md-9'>
    <h4>{{$text->title}}</h4>

    <p class='content-p'>{{$text->body}}</p>
</div>
@endsection 