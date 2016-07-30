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
	Route::get('/', ['as'	=> 'home', 'uses'	=> 'HomeController@index']);
	// Ganti Bahasa
	Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');

	// Contact Routes
	Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@index']);

	//Contact
	Route::get('contact/user', 'ContactController@user');

	//About
	Route::get('about', ['as' => 'about', 'uses' => 'AboutController@index']);

	//Events
	Route::get('events', ['as' => 'events', 'uses' => 'EventsController@index']);

	Route::get('events/detail', ['as' => 'events.detail', 'uses' => 'EventsController@detail']);

	//Daftar
	Route::get('daftar', ['as' => 'daftar', 'uses' => 'DaftarController@index']);


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

	/////////////// BACKEND ROUTES ///////////////
	Route::get('admin/dashboard', 'DashboardController@index');

	Route::get('admin/posting', ['as' => 'admin.posting', 'uses' => 'PostController@index']);
	Route::get('admin/posting/create', ['as' => 'admin.posting.create', 'uses' => 'PostController@create']);
	Route::post('admin/posting/create', ['as' => 'admin.posting.post', 'uses' => 'PostController@store']);
	Route::get('admin/posting/edit/{id}', ['as' => 'admin.posting.edit', 'uses' => 'PostController@edit']);
	Route::get('admin/posting/edit/{id}', ['as' => 'admin.posting.edit', 'uses' => 'PostController@edit']);
	Route::post('admin/posting/edit', ['as' => 'admin.posting.edit', 'uses' => 'PostController@update']);

	Route::get('admin/kategori', ['as' => 'admin.kategori', 'uses' => 'KategoriController@index']);
	Route::post('admin/kategori/create', ['as' => 'admin.kategori.post', 'uses' => 'KategoriController@store']);

	/////////////// END FOR BACKEND ROUTES ///////////////
