@extends ('layouts.form.master')

@section ('content')
    <div class = 'col-md-4'>
        <h2>Make New User</h2>
            <form action="/register" method='POST'>
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for='Name'>Name:</label>
                        <input type="text" class="form-control" name='name' id="formGroupExampleInput"  >
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="text" class="form-control" name='email' id="formGroupExampleInput2"  >
                    </div>
                    <div class="form-group" style='width: 50%'>
                        <label for="Phonenumber">Phonenumber:</label>
                        <input type="text" class="form-control" name='phonenumber' id="formGroupExampleInput2"  >
                    </div>
                     <div class="form-group" style='width: 50%'> <!-- Date input -->
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                    </div>
                    <div class="form-group">
                    {{--  <div class='col-md-4'>  --}}
                        <label for="sel1">Sector</label>
                        <select class="form-control" name='section' style="width: 40%;">
                            <option>Developer</option>
                            <option>Designer</option>
                            <option>Marketing</option>
                            <option>Coffee</option>
                        </select>
                    {{--  </div>  --}}
                    </div>
                    <div class= "form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name='password' id='password'>
                    </div>
                    <div class= "form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" class="form-control" name='password_confirmation' id='password_confirmation'>
                    </div>
                    <div class='form-group'>
                            <button type="submit" name='button' class="btn btn-primary">Create User</button>
                    </div>
                @include('layouts.errors')    
            </form> 
    </div>

@endsection