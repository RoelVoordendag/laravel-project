@extends('layouts.form.master')

@section('content')

    <div class = 'col-md-6'>
    
    <h1>Sign in</h1>
        <form action="/login" method='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for='email'>Email</label>
                <input type="text" class="form-control" name='email' id="email"  >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name='password' id="password">
            </div>
            <div class='form-group'>
                <button type="submit" name='button' class="btn btn-primary">Login</button>
            </div>
        </form>
        @include('layouts.errors')
    </div>
@endsection