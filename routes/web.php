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



//Auth::routes();

Route::get('/', 'PageController@index')->name('home');
Route::get('/product', 'PageController@product')->name('product');
Route::get('/cart', 'PageController@cart')->name('cart');
Route::get('/order', 'PageController@order')->name('order');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/payment', 'PageController@payment')->name('payment');
Route::get('/contact', 'PageController@contact')->name('contact');



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('category', 'CategoryAdminController');
    Route::resource('product', 'ProductAdminController');
});