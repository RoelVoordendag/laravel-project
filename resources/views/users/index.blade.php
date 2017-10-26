@extends ('layouts/master')

@section('content')
    @foreach($texts as $text)
        @if($text->switch)
             @section('header')
                <div class="jumbotron">
                    <h1>{{$text->title}}</h1>
                    <p class="truncate">{{$text->body}}<p>
                    <p><a class="btn btn-lg btn-success" href="/writer/detail/{{$text->id}}" role="button">Details</a></p>
                </div>  
            @endsection
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
{{--  @foreach($texts as $text)
        @if($text->switch)
           
        @endif

@endforeach  --}}