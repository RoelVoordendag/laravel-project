@extends('layouts.admin.master')

@section('search-engine-admin')

    <form action="/admin/search" class='form-inline' method='POST'>
        {{ csrf_field() }}
        <label class="sr-only" for="inlineFormInput">Search</label>
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Search Here" name='search'>
        <button type="submit" class="btn btn-info">Search</button>
    </form>

@endsection

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
            <td>
                <p><a class="btn btn-warning" href="/admin/edit/{{$user->id}}" role="button">Edit</a></p>
            </td>
            <td>
        </tr>
    @endforeach
@endsection
@section('below-table')
        <p><a class="btn btn-primary" href="/admin/register" role="button">Create User</a></p>
@endsection