@extends('layouts.admin.master')

@section('content-admin')
    @foreach($users as $user)

        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->date}}</td>
            <td>{{$user->section}}</td>
            <td>{{$user->phonenumber}}</td>
            <td>@if ($user->role == 1)
                   User
                @elseif ($user->role == 2)
                    Writer
                @elseif($user->role == 3)
                    Admin
                @endif
            </td>
            <td>
             <form action="{{ url('admin/delete/'.$user->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger">
                    Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
@section('below-table')
        <p><a class="btn btn-primary" href="/admin/register" role="button">Create User</a></p>
@endsection