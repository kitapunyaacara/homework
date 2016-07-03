<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	// Welcome Page Routes
	Route::get('/', [
		'uses'	=> 'HomeController@index',
		'as'		=> 'home'
	]);

	// Ganti Bahasa
	Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');

	// Contact Routes
	Route::resource('contact', 'ContactController', [
		'except' => ['show', 'edit']
	]);

	//Contact
	Route::get('contact/user', 'ContactController@user');

	// Authentication Routes ...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');
	Route::get('confirm/{token}', 'Auth\AuthController@getConfirm');

	// Resend Routes ...
	Route::get('resend', 'Auth\AuthController@getResend');

	// Registration Routes ...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'Auth\AuthController@postRegister');

	// Password Reset Link Request Routes ...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password Reset Routes ...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');
