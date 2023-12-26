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

//Route::get('/', function(){return view('home');});
Route::get('/contacts', function(){return view('contacts');});
Route::get('/about', function(){return view('about');});

Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts','IndexController@index')->name('post.index');
    Route::get('/posts/create','CreateController@create')->name('post.create');
    Route::post('/posts','StoreController@store')->name('post.store');
    Route::get('/posts/{post}','ShowController@show')->name('post.show');
    Route::get('/posts/{post}/edit','EditController@edit')->name('post.edit');
    Route::patch('/posts/{post}','UpdateController@update')->name('post.update');
    Route::delete('/posts/{post}','DeleteController@destroy')->name('post.destroy');
});

Route::group(['namespace' => 'Comment', 'prefix'=> '/post/{post}'], function () {
    Route::get('/comment/create','CreateController@create')->name('post.comment.create');
    Route::post('/comment','StoreController@store')->name('post.comment.store');
    Route::get('/comment/{comment}/edit','EditController@edit')->name('post.comment.edit');
    Route::patch('/comment/{comment}','UpdateController@update')->name('post.comment.update');
    Route::delete('/comment/{comment}','DeleteController@destroy')->name('post.comment.destroy');
});

Route::group(['namespace'=> 'Admin', 'prefix'=> 'admin', 'middleware'=> 'admin'], function () {
    Route::group(['namespace'=> 'Post'], function () {
        Route::get('/post','IndexController@index')->name('admin.post.index');
        Route::get('/posts/{post}','ShowController@show')->name('admin.post.show');
        Route::get('/posts/{post}/edit','EditController@edit')->name('admin.post.edit');
        Route::patch('/posts/{post}','UpdateController@update')->name('admin.post.update');
        Route::delete('/posts/{post}','DeleteController@destroy')->name('admin.post.destroy');
    });
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();