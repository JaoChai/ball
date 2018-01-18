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


// Manage All View Home
Route::get('/', function () {
    return view('home');
});

Route::get('content', function(){
	return view('layoutshome.content');
});

Route::get('result', function(){
	return view('layoutshome.result');
});




// Manage All View Backend

Route::get('dashboard', function(){
	return view('dashboard.index');
});

Route::get('tv', function(){
	return view('tv.index');
});

Route::get('league', function(){
	return view('league.index');
});

Route::get('table', function(){
	return view('table.index');
});

Route::get('login', function(){
	return view('login.login');
});

Route::get('banner1', function(){
	return view('banner1.index');
});

Route::get('banner2', function(){
	return view('banner2.index');
});

Route::get('banner3', function(){
	return view('banner3.index');
});

Route::get('banner4', function(){
	return view('banner4.index');
});

Route::get('banner5', function(){
	return view('banner5.index');
});

Route::get('manageuser', function(){
	return view('manageuser.index');
});

Route::get('facebook', function(){
	return view('facebook.index');
});
