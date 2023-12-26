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

Route::group(['namespace' => 'Comment'], function () {
    Route::get('/posts/{post}/comments','IndexController@index')->name('post.comment.index');
    Route::get('/posts/{post}/comments/create','CreateController@create')->name('post.comment.create');
    Route::post('/posts/{post}/comments','StoreController@store')->name('post.comment.store');
    Route::get('/comments/{comment}','ShowController@show')->name('post.comment.show');
    Route::get('/comments/{comment}/edit','EditController@edit')->name('post.comment.edit');
    Route::patch('/comments/{comment}','UpdateController@update')->name('post.comment.update');
    Route::delete('/comments/{comment}','DeleteController@destroy')->name('post.comment.destroy');
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
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/logout', 'LoginController@logout')->name('logout');
});
