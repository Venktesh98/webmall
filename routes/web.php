<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/add-to-cart/{productid}','CartController@addToCart')->name('cart.add'); 
Route::get('/cart/destroy/{itemid}','CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{itemid}','CartController@update')->name('cart.update');
Route::get('/cart/checkout','CartController@checkout')->name('cart.checkout');

Route::resource('orders','OrderController');


