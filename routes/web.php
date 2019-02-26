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
	// echo 13;
    return view('welcome');
});

// 19 - 40 wzl
Route::get('admin/a',function(){
	return view('admin/layout/index');
});
Route::resource('admin/user','Admin\UserController');
// Route::get('admin/post/aaa','Admin\PostController@aaa');
Route::get('admin/post/hot/{id}','Admin\PostController@hot');
Route::get('admin/post/nothot/{id}','Admin\PostController@nothot');
Route::get('admin/post/top/{id}','Admin\PostController@top');
Route::get('admin/post/nottop/{id}','Admin\PostController@nottop');

Route::resource('admin/post','Admin\PostController');

//41-60 czz
//61-80 wsx
//81-100 oywz






















