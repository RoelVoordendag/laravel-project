@extends('layouts.profile.profile-master')
@section('title')
    <h2>Profile Page</h2>
@endsection
@section('search-engine-profile')
    <form action="/profile/search" method="post" class='form-inline'>
            {{ csrf_field() }}
              <label for="inlineFormInput" style= 'padding-right:10px'>Kies een week:</label>
                <select class="form-control mb-2 mr-sm-2 mb-sm-0" name='week'id='inlineFormInput' style="width: 40%;">
                    @foreach($userdata as $user)
                        @foreach($user->salaryInput as $salary)
                            <option>{{$salary->week}}</option>
                        @endforeach
                    @endforeach 
                </select>
                <button type="submit" class="btn btn-info">Search Week</button>
    </form>
    <hr>
@endsection
@section('content-profile')
    @foreach($userdata as $user)
        @foreach($user->loans as $loan)
            @foreach($user->salaryInput as $salary)
                <tr>   
                    <td>{{$salary->week}}</td>
                    <td>{{$salary->hours}}</td>
                    <td>${{$loan->classes}}</td>
                    <td>${{$salary->week * $loan->classes}}</td>
                </tr>
            @endforeach
        @endforeach
    @endforeach
@endsection
