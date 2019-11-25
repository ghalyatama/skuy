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


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/developer', function () {
    return view('developer');
});

Route::get('/booking', function () {
    return view('bookinglist');
});

Route::get('/createide', function () {
    return view('createide');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','ProfileController@show')->name('profile');
Route::post('/developer', 'ProfileController@update')->name('developer.update');
Route::get('/developer','ProfileController@show')->name('profil');
