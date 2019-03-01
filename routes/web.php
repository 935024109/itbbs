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

// 19 - 40 wzl
// 后台
//加精置顶是否可以回复的路由开始
Route::get('admin/post/revert/{id}','Admin\PostController@revert')->middleware('login');
Route::get('admin/post/notrevert/{id}','Admin\PostController@notrevert')->middleware('login');
Route::get('admin/post/hot/{id}','Admin\PostController@hot')->middleware('login');
Route::get('admin/post/nothot/{id}','Admin\PostController@nothot')->middleware('login');
Route::get('admin/post/top/{id}','Admin\PostController@top')->middleware('login');
Route::get('admin/post/nottop/{id}','Admin\PostController@nottop')->middleware('login');
//结束
Route::resource('admin/post','Admin\PostController')->middleware('login');//帖子
Route::resource('admin/reply','Admin\ReplyController',['except'=>['index']])->middleware('login');//回帖的路由
//前台
Route::get('home/user/register','Home\RegisterController@index');
Route::post('home/user/register/email','Home\RegisterController@email');
Route::get('home/user/register/changestatus/{id}/{token}','Home\RegisterController@changestatus');







//41-60 czz
//用户路由
Route::get('/admin/user/freedom/{id}','Admin\UserController@freedom')->middleware('login');
Route::get('/admin/user/stopin/{id}','Admin\UserController@stopin')->middleware('login');
Route::get('/admin/user/stoptalk/{id}','Admin\UserController@stoptalk')->middleware('login');
Route::get('/admin/user/black','Admin\UserController@black')->middleware('login');
Route::resource('/admin/user','Admin\UserController')->middleware('login');
//后台登录页面
Route::get('/admin/captcha/{tmp}','Admin\LoginController@captcha')	;
Route::get('/admin/in','Admin\LoginController@index');
//登录
Route::post('/admin/login','Admin\LoginController@login');
//退出
Route::get('/admin/out','Admin\LoginController@out');

// 前台首页
Route::resource("/home",'Home\IndexController');

// 前台用户管理
Route::get('/home/user/in','Home\UserController@in');
Route::get('/home/user/login','Home\UserController@login');
Route::resource('/home/user','Home\UserController');
















//61-80 wsx
// Blogroll 友情链接路由
Route::resource('admin/blogroll','Admin\BlogrollController')->middleware('login');
// Config 网站配置
Route::resource('admin/config','Admin\ConfigController');
// announcement 公告管理
Route::resource('admin/announcement','Admin\AnnouncementController');


















//81-100 oywz
//轮播图路由
Route::resource('admin/carousel','Admin\CarouselController')->middleware('login');
//添加板块子分类路由
Route::get('admin/forum/create/{id}','Admin\ForumController@create')->middleware('login');
//板块分类资源路由
Route::resource('admin/forum','Admin\ForumController')->middleware('login');































































