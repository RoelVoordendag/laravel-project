@extends ('layouts.form.master')


@section ('content')
@include('layouts.admin.sidebar')

    <div class = 'col-md-4'>
        <h2>Make New Class</h2>
            <form action="/loanclasses/create" method='POST'>
                {{ csrf_field() }}
                    <div class="form-group" style='width: 50%'>
                        <label for='Name'>Money:</label>
                        <input type="number"  class="form-control" name='loanclass' id="formGroupExampleInput" >
                    </div>
                    <div class='form-group'>
                            <button type="submit" name='button' class="btn btn-primary">Create Class</button>
                    </div>
                @include('layouts.errors')    
            </form> 
    </div>

@endsection