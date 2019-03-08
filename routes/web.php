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

/**
 * 后台路由
 */
//后台登录页面
Route::get('/admin/in','Admin\LoginController@index');
//后台登录
Route::post('/admin/login','Admin\LoginController@login');
//后台登录验证码
Route::get('/admin/captcha/{tmp}','Admin\LoginController@captcha');
//退出
Route::get('/admin/out','Admin\LoginController@out');


//后台用户路由
Route::group(['middleware'=>'login'],function(){
	// 放出小黑屋
	Route::get('/admin/user/freedom/{id}','Admin\UserController@freedom');
	Route::get('/admin/user/stopin/{id}','Admin\UserController@stopin');
	// 禁言
	Route::get('/admin/user/stoptalk/{id}','Admin\UserController@stoptalk');
	// 关进小黑屋
	Route::get('/admin/user/black','Admin\UserController@black');
	//资源路由
	Route::resource('/admin/user','Admin\UserController');
});


//后台帖子路由

Route::group(['middleware'=>'login'],function(){
	//加精置顶是否可以回复的路由开始
	// 允许回复
	Route::get('admin/post/revert/{id}','Admin\PostController@revert');
	// 禁止回复
	Route::get('admin/post/notrevert/{id}','Admin\PostController@notrevert');
	// 精品
	Route::get('admin/post/hot/{id}','Admin\PostController@hot');
	// 取消精品
	Route::get('admin/post/nothot/{id}','Admin\PostController@nothot');
	// 置顶
	Route::get('admin/post/top/{id}','Admin\PostController@top');
	// 取消置顶
	Route::get('admin/post/nottop/{id}','Admin\PostController@nottop');
	//结束
	//
	Route::get('admin/post/changepid/{id}','Admin\PostController@changepid');
	//资源路由
	Route::resource('admin/post','Admin\PostController');
});

Route::group(['middleware'=>'login'],function(){
	// 后台回复帖资源路由
	Route::resource('admin/reply','Admin\ReplyController',['except'=>['index']]);

	// 后台轮播图路由
	Route::resource('admin/carousel','Admin\CarouselController');


	// 添加板块子分类路由
	Route::get('admin/forum/create/{id}','Admin\ForumController@create');
	//板块分类资源路由
	Route::resource('admin/forum','Admin\ForumController');

	// Blogroll 友情链接路由
	Route::resource('admin/blogroll','Admin\BlogrollController');
	// Config 网站配置
	Route::resource('admin/config','Admin\ConfigController');
	// announcement 公告管理
	Route::resource('admin/announcement','Admin\AnnouncementController');
});

//后台首页
Route::resource("/admin",'Admin\IndexController')->middleware('login');














/**
 * 前台路由
 */

// 前台签到
// 签到后详情页
Route::get('/home/signs/list','Home\SignsController@list');
// 已签到提示页
Route::get('/home/signs/error','Home\SignsController@error');
// 签到时未登录,跳转到登录页
Route::get('/home/signs/login','Home\SignsController@login');
// 资源路由
Route::resource('/home/signs','Home\SignsController'); 


// 前台用户
// 注册
Route::get('home/user/register','Home\RegisterController@index');
// 发送邮件
Route::post('home/user/register/email','Home\RegisterController@email');
// 激活
Route::get('home/user/register/changestatus/{id}/{token}','Home\RegisterController@changestatus');
// 用户收藏帖子
Route::get('home/user/collection/{id}','Home\UserController@collection');
// 手机号验证
Route::get('home/user/phone/{phone}','Home\UserController@phone');
// 资源路由
Route::resource('home/user','Home\UserController');


//登录
Route::get('home/login','Home\LoginController@login');
// 退出
Route::get('home/out','Home\LoginController@out');
// 到登录页
Route::post('home/in','Home\LoginController@in');//


// 前台轮播图
Route::get('home/carousel','Home\CarouselController@index');

// 前台帖子
// 前台发帖
Route::get('home/goPost/{id}','Home\PostController@goPost');
// 帖子收藏
Route::get('home/post/nolike/{id}','Home\PostController@nolike');
// 帖子取消收藏
Route::get('home/post/like/{id}','Home\PostController@like');
// 帖子详情页
Route::get('home/post/checkcontent/{pid}/{uid}','Home\PostController@goCheckContent');
// 帖子资源路由
Route::resource('home/post','Home\PostController');

//前台回复贴
Route::post('home/reply/add/{pid}/{uid}','Home\ReplyController@add');
// Route::resource('home/reply','Home\ReplyController');

// 前台首页
Route::resource("/home",'Home\IndexController');
