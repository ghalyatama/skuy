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

Route::get('/investor', function () {
    return view('investor');
});

Route::get('/editprofileinvestor', function () {
    return view('editprofileinvestor');
});

Route::get('/profileinvestor', function () {
    return view('profileinvestor');
});

Route::get('/developerprofile', function () {
    return view('developerprofile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///Routing untuk profile
Route::get('/profile','ProfileController@show')->name('profile');
Route::post('/developer', 'ProfileController@update')->name('developer.update');
Route::get('/developer','ProfileController@show')->name('profil');

//Routing untuk ide
Route::post('/createide', 'IdeController@store')->name('store.ide');
Route::get('/dashboard','IdeController@showperakun')->name('ide.akun');
Route::post('/editide', 'IdeController@update')->name('update.ide');
Route::delete('/hapuside/{id}/delete', 'IdeController@hapus')->name('delete.ide');
