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

Route::get('viewticket', 'TicketController@showall');

Route::get('viewticket/{id}', 'TicketController@show')->name('pages.viewticket');;

Route::get('submitticket', 'TicketController@create');

Route::get('login', 'Login@login');

Route::get('logout', 'Login@logout');

Route::get('its', 'TicketController@getAll');

Route::resource('tickets', 'TicketController');

//$logo  = public_path() . '/images/logo.jpg';
