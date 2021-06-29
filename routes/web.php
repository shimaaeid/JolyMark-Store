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

Route::get('pay', 'FatooraController@payOrder');
Route::get('callback', function(){
    return "success";
});
Route::get('error' , function(){
    return "error";
});


Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/who', function () {
    return view('who');
});
Route::resource('Shoes', 'Shoes');
Route::resource('Bag', 'Bag');
Route::resource('ShopCart', 'ShopCart');
Route::resource('ShopDetails', 'ShopDetails');
Route::resource('Contact', 'Contact');

Route::resource('Checkout', 'Checkout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
