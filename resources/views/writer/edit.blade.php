@extends('layouts.form.master')

@section('content')
       <div class = 'col-md-8'>
        <h2>Edit Text</h2>
            <form action="{{ url('writer/edit/'.$text->id) }}" method='POST'>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for='title'>Title</label>
                    <input type="text" value='{{$text->title}}'class="form-control" name='title' id="title"  >
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name='body' rows="12">{{$text->body}}</textarea>
                </div>
                <div class='form-group'>
                    <button type="submit" name='button' class="btn btn-primary">Edit Text</button>
                </div>
            </form>
        @include('layouts.errors')
    </div>
@endsection 