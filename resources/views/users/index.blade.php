@extends ('layouts/master')

@section('content')
    
        <div class="col-lg-4">
        <h2>Text</h2>
            <p>
                @foreach($users as $user)       
                    {{$user->name}}
                @endforeach
            </p>
        <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

   

@endsection
