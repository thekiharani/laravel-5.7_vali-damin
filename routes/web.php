<?php

Auth::routes();

Route::middleware('auth')->group(function() {
	Route::get('/', function () {
	    return view('welcome');
	})->name('welcome');

	Route::get('/home', 'HomeController@index')->name('home');
});
