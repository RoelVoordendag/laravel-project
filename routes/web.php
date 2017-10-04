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

//homepage handling
    Route::get('/', 'UsersController@homepageHandler');

//Error handling role
    Route::get('/errorRole', 'ErrorController@errorRole');

    Route::post('/errorRole', 'ErrorController@destroy');


//Login
    Route::get('/login',  'SessionsController@create')->name('login');  //login index
    
    Route::post('/login', 'SessionsController@store'); //when the login forum is posted
    
    Route::get('/logout', 'SessionsController@destroy'); //logout

//middleware admin


Route::middleware(['user'])->group(function(){

        Route::get('/user', 'UsersController@index')->name('home'); //homepage voor users    
            
            Route::middleware(['writer'])->group(function(){
                //midleware for al admin
                Route::middleware(['admin'])->group(function(){
                    
                    Route::get('/admin', 'AdminController@index')->name('admin'); //admin index page  

                    //Register
                    Route::get('/admin/register' , 'RegistrationController@create')->name('register');

                    Route::post('/register', 'RegistrationController@store');

            });
        });
});

