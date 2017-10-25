@extends('layouts.profile.profile-master')
@section('title')
    <h2>Profile Page</h2>
@endsection
@section('search-engine-profile')
    
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
