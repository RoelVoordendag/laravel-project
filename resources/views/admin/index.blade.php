@extends('layouts.admin.master')

@section('content-admin')
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->date}}</td>
            <td>{{$user->section}}</td>
            <td>{{$user->phonenumber}}</td>
            <td>update</td>
        </tr>
    @endforeach
@endsection