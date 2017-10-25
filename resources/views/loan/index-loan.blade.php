@extends('layouts.loan.master-loan')

@section('content-loan')
    @foreach($loans as $loan)
        <tr>
            <td>
                {{$loan->classes}}
            </td>
           
                <td>
                    <p><a class="btn btn-warning" href="/loanclasses/edit/{{$loan->id}}" role="button">Edit</a></p>
                </td>
                 <td>
                <form action="{{ url('loanclasses/delete/'.$loan->id) }}" method="POST">
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
    <p><a class="btn btn-primary" href="/loanclasses/create" role="button">Create Class</a></p>
@endsection