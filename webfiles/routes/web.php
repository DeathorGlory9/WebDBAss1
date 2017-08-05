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
    return view('pages/index');
});

Route::get('index', function () {
    return view('pages/index');
});

Route::get('faq', function () {
	return view('pages/faq');
});

Route::get('submitticket', function () {
	return view('pages/submitticket');
});

Route::get('viewticket', function () {
	return view('pages/viewticket');
});

Route::get('its', function () {
	return view('pages/its');
});

//$logo  = public_path() . '/images/logo.jpg';
