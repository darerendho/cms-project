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



Route::get('/', 'PostsController@index');
Route::get('/create','PostsController@createpost');

Route::post('/posts','PostsController@store') ;
//Controller => Use Plural "PostsController"
//Eloquent model => Use Singular "Post"
//Migration => create_posts-table
