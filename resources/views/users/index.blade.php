@extends ('layouts/master')

@section('content')
    @foreach($texts as $text)
        @if($text->switch)
            <div class="col-lg-4">
                <h2>{{$text->title}}</h2>
                    <p class='truncate'>
                        {{$text->body}}
                    </p> 
                <p><a class="btn btn-primary" href="/writer/detail/{{$text->id}}" role="button">View details</a></p>
            </div>
        @endif
    @endforeach
@endsection
