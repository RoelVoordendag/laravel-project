@extends ('layouts/master')

@section('content')
    @foreach($users as $user)
        <ul>
            <li>
                {{$user->Name}}
            </li>
        </ul>
    @endforeach
@endsection
