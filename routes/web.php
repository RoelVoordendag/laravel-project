<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 
Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

//testing with users
// Route:get('/users', 'UserController@index');

Route::get('/user', 'UsersController@index')->name('home'); //homepage voor users

//Register

Route::get('/register' , 'RegistrationController@create')->name('register');

Route::post('/register', 'RegistrationController@store');


//Login

Route::get('/user/login',  'SessionsController@create')->name('login');  //login index

Route::post('/user/login', 'SessionsController@store'); //when the login forum is posted

Route::get('/user/logout', 'SessionsController@destroy'); //logout
