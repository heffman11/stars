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

Route::get('/', 'HomeController@index');

// Chat
Route::get('chat', 'ChatController@index')->middleware('auth');
Route::post('chat/store', 'ChatController@new')->middleware('auth');

// Admin
Route::get('admin', 'AdminController@index')->middleware('auth');
Route::get('admin/users', 'AdminController@users')->middleware('auth');
Route::get('admin/users/edit/{id}', 'AdminController@edit')->middleware('auth');
Route::post('admin/users/update', 'AdminController@save')->middleware('auth');
Route::get('admin/users/delete/{id}', 'AdminController@delete')->middleware('auth');
Route::get('admin/users/ban/{id}', 'AdminController@ban')->middleware('auth');
Route::get('admin/users/unban/{id}', 'AdminController@unban')->middleware('auth');
Route::get('admin/gallery', 'AdminController@gallery')->middleware('auth');

// Gallery 
Route::get('gallery', 'ImageController@index');
Route::post('gallery/upload', 'ImageController@upload');

//User 
Route::get('/profile/{id}', 'UserController@Index')->middleware('auth');
Route::get('/profile/update', 'UserController@Update')->middleware('auth');
Route::get('/profile/gallery', 'UserController@Gallery')->middleware('auth');

Auth::routes();

