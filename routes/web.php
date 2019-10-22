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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product', 'HomeController@product')->name('product');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/order', 'HomeController@order')->name('order');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/payment', 'HomeController@payment')->name('payment');
Route::get('/contact', 'HomeController@contact')->name('contact');



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('category', 'CategoryAdminController');
    Route::resource('product', 'ProductAdminController');
});