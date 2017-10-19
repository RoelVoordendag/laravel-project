@extends('layouts.admin.search')

@section('search-engine-admin')
    <div class="list-inline-item">
        <h5>Search Results On: {{$search_term}}</h5>
        <a href="/admin"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
@endsection

@section('results')
    @if($results)
        <table class="table table-striped">
            @include('layouts.admin.catogories')
    <tbody>
        @foreach($results as $user)
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
            </tr>
        @endforeach
    </tbody>
        </table>
    @else
    <h5>Sorry, no results found on: {{$search_term}}</h5>
    @endif

@endsection