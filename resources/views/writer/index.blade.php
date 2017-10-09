@extends('layouts.writer.master')

@section('content-writer')
    @foreach($titles as $title)
        <tr>
            <td>{{$title->title}}</td>
            <td>{{$title->id}}</td>
            <td>
                <form action="{{ url('writer/'.$title->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection
@section('below-table')
    <p><a class="btn btn-primary" href="/writer/create" role="button">Create Text</a></p>
@endsection