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

Route::resource('admin/post','Admin\PostController');























































//轮播图路由
Route::resource('admin/carousel','CarouselController');

