<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| 
*/

// Route::get('controller','TestController@index');
// Route::get('name/{name}','TestController@name');
Route::get('/','FrontController@index');
Route::get('contact','FrontController@contact');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('user', 'UserController');
Route::resource('movie', 'MovieController');
Route::resource('theater', 'TheaterController');
Route::resource('log', 'LogController');
Route::get('logout','LogController@logout');

//Angular

Route::resource('notes', 'NoteController');
Route::resource('films', 'filmController');

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
