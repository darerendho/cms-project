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



//Route::get('/tasks','TaskController@index');
//Route::get('/tasks/{task}','TaskController@show');


//Posts Controller
Route::get('/', 'PostsController@index')->name('home');
Route::get('/create','PostsController@create');
Route::get('/posts/{post}','PostsController@show') ;
Route::post('/posts','PostsController@store');

//Comments Controller
Route::post('/posts/{post}/comments','CommentsController@addComment');

//Registrations Controller
Route::get('/register','RegistrationsController@create');
Route::post('/register','RegistrationsController@store');

//Sessions Controller
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

//laravel Base Home Controller upon new project
Route::get('/home', 'HomeController@index');


//Controller => Use Plural "PostsController"
//Eloquent model => Use Singular "Post"
//Migration => create_posts-table
