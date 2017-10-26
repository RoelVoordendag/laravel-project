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
    
         //detail page for writing pages
        Route::get('/writer/detail/{text}', 'TextController@detail');
    
        //homepage voor users
        Route::get('/user', 'UsersController@index')->name('home');   
        
        Route::get('/user/profile', 'UsersController@profile');
        //getting chosen week selected by user
        Route::post('/profile/search', 'UsersController@searchWeek');
            
            //middleware for writers
            Route::middleware(['writer'])->group(function(){

                //page to delete and edit text
                Route::get('/writer', 'TextController@index')->name('writer');
                //Route to create a text
                Route::get('/writer/create', 'TextController@create')->name('create-text');
                //posting text
                Route::post('/writer/create', 'TextController@store');
                //delete post
                Route::delete('/writer/{text}', 'TextController@delete');
                //editing post
                Route::get('/writer/edit/{text}', 'TextController@edit');   
                //updating data in database
                Route::post('/writer/edit/{text}', 'TextController@edited');
                //changing online statust of text
                Route::post('writer/system/{text}', 'TextController@switch');

                    //midleware for al admin
                    Route::middleware(['admin'])->group(function(){
                        
                        Route::get('/admin', 'AdminController@index')->name('admin'); //admin index page  
                        //deleting user
                        Route::delete('admin/delete/{user}', 'AdminController@delete')->name('user-delete');
                        //edit user
                        Route::get('admin/edit/{user}', 'AdminController@edit');
                        //editing user
                        Route::post('admin/edit/{user}', 'AdminController@edited');
                        //Register
                        Route::get('/admin/register' , 'RegistrationController@create')->name('register');
                        //posting data to server
                        Route::post('/register', 'RegistrationController@store');
                        //searching in user database
                        Route::post('admin/search','AdminController@searchEngine');
                        //inserting loan in DB
                        Route::get('admin/loan' , 'AdminController@loanInverting');
                        //posting hours to database
                        Route::post('admin/loan/{user}', 'UsersController@loanHours');
                        //to page with loans
                        Route::get('/loanclasses', 'loanController@index');
                        //delete function loanclasses
                        Route::delete('loanclasses/delete/{loan}', 'loanController@delete');
                        //link to making loanclasses
                        Route::get('loanclasses/create', 'loanController@createpage');
                        //pushinh data to table
                        Route::post('loanclasses/create', 'loanController@create');
                        //to edit page
                        Route::get('loanclasses/edit/{loan}', 'loanController@edit');
                        //editing data for class
                        Route::post('loanclasses/edited/{loan}', 'loanController@edited');
                        
                    });
        });
});

