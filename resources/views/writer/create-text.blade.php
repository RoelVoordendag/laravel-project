@extends('layouts.form.master')

@section('content')
    <div class = 'col-md-6'>
        <h1>Create Text</h1>
            <form action="/writer/create" method='POST'>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for='title'>Title</label>
                    <input type="text" class="form-control" name='title' id="title"  >
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name='body' rows="7"></textarea>
                </div>
                <div class='form-group'>
                    <button type="submit" name='button' class="btn btn-primary">Create Text</button>
                </div>
            </form>
        @include('layouts.errors')
    </div>


@endsection