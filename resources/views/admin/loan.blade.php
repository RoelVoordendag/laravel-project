@extends('layouts.form.master')
@section('content')
    <div class = 'col-md-4'>
    <h2>Salaris</h2>
    <hr>
    @foreach($users as $user)
        <form action="{{ url('admin/loan/'.$user->id) }}" method='POST'>
            {{ csrf_field() }}
            <div class="form-group" >
                <label for='Week'>Week</label>
                <input type="number" class="form-control" name='week' id="name" style='width: 25%'>
            </div>
            <div class="form-group" >
                <label for='name'>{{$user->name}}</label>
                <input type="number" class="form-control" name='hours' id="name" style='width: 25%'>
            </div>
            <div class='form-group'>
                <button type="submit" name='button' class="btn btn-primary">Publish</button>
            </div>
            @include('layouts.errors')    
        </form>
    @endforeach 
    </div>
@endsection