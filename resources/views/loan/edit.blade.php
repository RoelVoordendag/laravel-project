@extends ('layouts.form.master')


@section ('content')
@include('layouts.admin.sidebar')

    <div class = 'col-md-4'>
        <h2>EditClass</h2>
            <form action="{{ url('/loanclasses/edited/'.$loan->id)}}" method='POST'>
                {{ csrf_field() }}
                    <div class="form-group" style='width: 50%'>
                        <label for='Name'>Money:</label>
                        <input type="number"  class="form-control" name='class' value='{{$loan->classes}}' id="formGroupExampleInput" >
                    </div>
                    <div class='form-group'>
                            <button type="submit" name='button' class="btn btn-primary">Edit Class</button>
                    </div>
                @include('layouts.errors')    
            </form> 
    </div>

@endsection