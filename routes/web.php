<?php

use Illuminate\Support\Facades\Route;

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
// DB::listen(function ($event) {
//     dump($event->sql);
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/post','PostController@index')->name('post.index');
// Route::get('/post/create','PostController@create')->name('post.create');
// Route::get('/post/{post}','PostController@show')->name('post.show');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController')->except(['index','show','update','create','edit']);

