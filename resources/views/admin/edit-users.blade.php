@extends('layouts.form.master')

@section('content')
       <div class = 'col-md-4'>
        <h2>Edit Text</h2>
            <form action="{{ url('admin/edit/'.$user->id) }}" method='POST'>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for='name'>Name</label>
                    <input type="text" value='{{$user->name}}'class="form-control" name='name' id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value='{{$user->email}}'class="form-control" name='email' id="email">
                </div>
                <div class="form-group" style='width: 50%'>
                    <label for="phonenumber">Phonenumber</label>
                    <input type="text" value='{{$user->phonenumber}}'class="form-control" name='phonenumber' id="phonenumber">
                </div>
               <div class="form-group" style='width: 50%'> <!-- Date input -->
                    <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" value="{{$user->date}}"type="text"/>
                </div>
                    <div class="form-group">
                    <label for="sel1">Sector</label>
                    <select class="form-control" name='section' value="{{$user->section}}" style="width: 40%;">
                        <option selected>{{$user->section}}</option>
                        <option>Developer</option>
                        <option>Designer</option>
                        <option>Marketing</option>
                        <option>Coffee</option>
                    </select>
                    </div>
                     <div class="form-group">
                        <label for="sel1">Role</label>    
                        <select class="form-control" name='role'value='{{$user->role}}'style="width: 40%;">
                            <option selected disabled>
                            @if($user->role == 1)
                                User
                            @elseif($user->role ==2)
                                Writer
                            @elseif($user->role == 3)
                                Admin
                            @endif
                            </option>
                            <option value='3'>Admin</option>
                            <option value='2'>Writer</option>>
                            <option value='1'>User</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label for="sel1">Loan Class</label>
                        
                        <select name="class" class='form-control' style="width: 40%;">
                        @foreach($loans as $loan)   
                                <option value="{{$loan->id}}">{{$loan->classes}}</option>    
                            @endforeach
                        </select>
                    </div>
                <div class='form-group'>
                    <button type="submit" name='button' class="btn btn-primary">Edit User</button>
                </div>
            </form>
        @include('layouts.errors')
    </div>
@endsection 