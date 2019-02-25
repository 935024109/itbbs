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
	echo 13;
    return view('welcome');
});

// 19 - 40 wzl
Route::resource('admin/user','Admin\UserController');



//41-60 czz
//61-80 wsx
//81-100 oywz