@extends('layouts.writer.master')

@section('content-writer')
    @foreach($texts as $text)
        <tr>
            <td>{{$text->title}}</td>
            <td>
            <p><a class="btn btn-warning" href="/writer/edit/{{$text->id}}" role="button">Edit</a></p>
            </td>
            <td>
                <form action="{{ url('writer/'.$text->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}   
                    <button type="submit" class="btn btn-danger">
                    Delete
                    </button>
                </form>
            </td>
            <td>
               <form action="{{ url('writer/system/'.$text->id) }}" method='POST'>
                    {{ csrf_field() }}
                    @if($text->switch)
                        <button type="submit" class="btn btn-outline-success">Online</button>
                    @else
                        <button type="submit" class="btn btn-outline-danger">Offline</button>
                    @endif
               </form>
            </td>
            <td>
                <form action="{{url('writer/main/'.$text->id)}}" method="POST">
                    {{ csrf_field() }}
                    @if($text->main)
                        <button type="submit" class="btn btn-outline-success">Shown</button>
                    @else
                        <button type="submit" class="btn btn-outline-danger">Not Shown</button>
                    @endif
                </form>
            </td>
        </tr>
    @endforeach
@endsection
@section('below-table')
    <p><a class="btn btn-primary" href="/writer/create" role="button">Create Text</a></p>
@endsection
