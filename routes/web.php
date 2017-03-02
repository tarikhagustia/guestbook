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

// Route::get('/', function () {
//     return view('layouts/depan');
// });
Route::get('/', 'GuestController@index');
Route::get('/contoh', 'GuestController@contoh');

Route::post('/guest/save', 'GuestController@simpan')->name('guest_save');
Route::get('/thanks', 'GuestController@thanks')->name('guest_thanks');

Route::get('/login' , 'LoginController@index');
Route::get('/logout' , 'LoginController@logout')->name('logout');
Route::post('/login' , 'LoginController@postLogin')->name('login');

Route::get('/home', 'HomeController@index');

Route::get('/checkout' , 'CheckoutController@index')->name('checkout');
Route::post('/checkout' , 'CheckoutController@postData');
Route::post('/checkout/guest' , 'CheckoutController@postCheckout');

Route::get('/report/checkin' , 'ReportController@index');
// Auth::routes();
Route::get('/user/create', 'RegisterController@index');
Route::post('/user/create', 'RegisterController@postRegister');
Route::get('/home', 'HomeController@index');
