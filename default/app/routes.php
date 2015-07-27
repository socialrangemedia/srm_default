<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Registration
Route::get('/register', ['as' => 'register', 'uses' => 'RegistrationController@create'])->before('guest');
Route::post('/register', ['as' => 'register.store', 'uses' => 'RegistrationController@store']);

# Authentication
Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController',['only' => ['create', 'store', 'destroy']]);

# Users
Route::get('/users', ['as' => 'users', 'uses' => 'UsersController@index']);
# User create/edit
Route::get('/users/create/{id}', ['as' => 'create_user', 'uses' => 'UsersController@create']);
Route::post('/users/create/', ['as' => 'users.store', 'uses' => 'UsersController@store']);

Route::get('/users/edit/{id}', ['as' => 'edit', 'uses' => 'UsersController@edit']);
Route::post('/users/edit', ['as' => 'users.store', 'uses' => 'UsersController@store']);

# Users resource
Route::resource('users', 'UsersController',['only' => ['index','show', 'create', 'store']]);


