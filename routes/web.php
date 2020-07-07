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

Route::get('/cart','CartController@index')->name('cart.index')->middleware('auth');
Route::get('/add-to-cart/{productid}','CartController@addToCart')->name('cart.add')->middleware('auth'); 
Route::get('/cart/destroy/{itemid}','CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemid}','CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout','CartController@checkout')->name('cart.checkout')->middleware('auth');

Route::resource('orders','OrderController')->middleware('auth');

Route::resource('shops','ShopController')->middleware('auth');

Route::get('paypal/checkout/{order}','PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}','PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel','PayPalController@PayPalCancelPage')->name('paypal.cancel');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
