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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route Post
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'HomeController@store')->name('post.store');
Route::get('/post/program', 'PostController@program')->name('post.program');
Route::get('/post/desain', 'PostController@desain')->name('post.desainer');
Route::get('/post/arsitek', 'PostController@arsitek')->name('post.arsitek');
Route::get('/post/animasi', 'PostController@animasi')->name('post.animasi');


// Edit Posts
//untuk menampilkan data
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit'); 
// untuk menyimpan data yang sudah diedit
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');

// Delete Post
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');

//show post
Route::get('/post/{post}', 'PostController@show')->name('post.show');