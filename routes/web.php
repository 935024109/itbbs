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
Route::get('admin/post/revert/{id}','Admin\PostController@revert');
Route::get('admin/post/notrevert/{id}','Admin\PostController@notrevert');

Route::get('admin/post/hot/{id}','Admin\PostController@hot');
Route::get('admin/post/nothot/{id}','Admin\PostController@nothot');
Route::get('admin/post/top/{id}','Admin\PostController@top');
Route::get('admin/post/nottop/{id}','Admin\PostController@nottop');

Route::resource('admin/post','Admin\PostController');






// Route::get('admin/reply/add/{id}','Admin\ReplyController@add');
Route::resource('admin/reply','Admin\ReplyController',['except'=>['index']]);




//41-60 czz
//用户路由
Route::get('/admin/user/freedom/{id}','Admin\UserController@freedom');
Route::get('/admin/user/stopin/{id}','Admin\UserController@stopin');
Route::get('/admin/user/stoptalk/{id}','Admin\UserController@stoptalk');
Route::get('/admin/user/black','Admin\UserController@black');
Route::resource('/admin/user','Admin\UserController');
//后台登录页面
Route::get('/admin/in','Admin\LoginController@index');
//登录
Route::post('/admin/login','Admin\LoginController@login');
//退出
Route::get('/admin/out','Admin\LoginController@out');
















//61-80 wsx
// Blogroll 友情链接路由
Route::resource('admin/blogroll','Admin\BlogrollController');
// Config 网站配置
Route::resource('admin/config','Admin\ConfigController');
// announcement 公告管理
Route::resource('admin/announcement','Admin\AnnouncementController');

















//81-100 oywz
//轮播图路由
Route::resource('admin/carousel','Admin\CarouselController');
//添加板块子分类路由
Route::get('admin/forum/create/{id}','Admin\ForumController@create');
//板块分类资源路由
Route::resource('admin/forum','Admin\ForumController');































































