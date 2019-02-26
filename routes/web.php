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
Route::get('admin',function(){
	return view('admin/layout/index');
});
Route::resource('admin/user','Admin\UserController');
// Route::get('admin/post/aaa','Admin\PostController@aaa');
Route::get('admin/post/hot/{id}','Admin\PostController@hot');
Route::get('admin/post/nothot/{id}','Admin\PostController@nothot');
Route::get('admin/post/top/{id}','Admin\PostController@top');
Route::get('admin/post/nottop/{id}','Admin\PostController@nottop');

Route::resource('admin/post','Admin\PostController');























































//轮播图路由
Route::resource('admin/carousel','Admin\CarouselController');

<<<<<<< HEAD




































// Blogroll 友情链接路由
Route::resource('admin/blogroll','Admin\BlogrollController');
=======
>>>>>>> 84ee624498471462baf815207af6cabc25abab98
