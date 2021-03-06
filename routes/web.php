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

Route::get('/', 'FrontendController@index')->name('frontend.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::post('/cart/{service}', 'CartController@store')->name('ajax.store.cart');

Route::resource('/test', 'ServiceController');

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/{path?}', 'Admin\DashboardController@index')->name('admin')->where('path', '.*');
});
