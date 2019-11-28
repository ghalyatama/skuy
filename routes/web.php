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

// Route::get('/booking', function () {
//     return view('bookinglist');
// });

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

Route::get('/editide', function () {
    return view('editide');
});

Route::get('/detailide', function () {
    return view('detailide');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

///Routing untuk profile
Route::get('/profile','ProfileController@show')->name('profile');
Route::post('/developer', 'ProfileController@update')->name('developer.update');
Route::get('/developer','ProfileController@show')->name('profil');
Route::get('/profileinvestor','ProfileController@show')->name('profilinvest');
Route::get('/editinvestor', 'ProfileController@showperid')->name('show.investor');
Route::post('/editinvestor', 'ProfileController@updateinvestor')->name('investor.update');
Route::get('/investor/{id}', 'ProfileController@tampilaninvestor')->name('this.investor');
Route::get('/developerprofile/{id}', 'ProfileController@tampilandeveloper')->name('this.developer');
// Route::get('/developerprofile/{id}', 'ProfileController@tampilandeveloper2')->name('this.developer2');

//Routing untuk ide
Route::post('/createide', 'IdeController@store')->name('store.ide');
Route::get('/dashboard','IdeController@showperakun')->name('ide.akun');
Route::delete('/dashboard/{id}/delete', 'IdeController@hapus')->name('delete.ide');
Route::get('/editide/{id}','IdeController@showperid')->name('ide.id');
Route::post('/editide/{id}', 'IdeController@update')->name('update.ide');
Route::get('/','IdeController@showall')->name('homepage');
Route::get('/dashboard/{id}/modal','IdeController@showmodal')->name('modal');
Route::get('/detailide/{id}','IdeController@showperdetail')->name('detail.ide');

//Routing untuk booking
Route::get('/home/{id}', 'BookingController@booking')->name('booked');
Route::get('/bookinglist', 'BookingController@show')->name('booking');
Route::get('/bookinglist/{id}', 'BookingController@accept')->name('accepted');
Route::delete('/bookinglist/{id}/delete', 'BookingController@ignore')->name('ignored');


Route::get('/oke/{name}', function(Request $request, $name){
    $to_name = "$name";
    $to_email = "risaintanka23@gmail.com";
    $data = array("name" => "$name", "body" => "Booking!");
    Mail::send('mail', $data, function ($message) use ($to_name, $to_email){
        $message->to($to_email)
        ->subject('An Investor has booked you!');
    });
    echo "mail has been sent!";
});