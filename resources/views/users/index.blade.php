@extends ('layouts/master')

@section('content')
    @foreach($texts as $text)       
        <div class="col-lg-4" >
            <h2>{{$text->title}}</h2>
            <div class="col-40 text-truncate">
                <p>
                    {{$text->body}}
                </p>
            </div>    
            <p><a class="btn btn-primary" href="/writer/detail/{{$text->id}}" role="button">View details</a></p>
        </div>
    @endforeach

   

@endsection
