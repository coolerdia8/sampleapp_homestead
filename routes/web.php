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
Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@register');
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');//P42
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/logout', 'Auth\LoginController@logout');


Route::get('/', function () {
    return view('welcome');
});
Route::get("/who/{name}",function($name){
		return "<h1>Hello".$name."さん</h1>";

	});
Route::redirect("/google","https://mail.google.com/mail/u/0/#inbox");

Route::get("/helloBlade",function(){
	return view("hello");
});

Route::get('/home', function () {
    return view('home');
});
