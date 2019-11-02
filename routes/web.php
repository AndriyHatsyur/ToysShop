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

Route::get('/order', 'PageController@order')->name('order');
Route::post('/order', 'PageController@orderCreate')->name('order-create');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/payment', 'PageController@payment')->name('payment');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/search', 'PageController@search')->name('search');


Route::get('/category/{slug}', 'ProductController@category')->name('category');
Route::get('/product/{slug}', 'ProductController@product')->name('product');
Route::get('/manufacturer/{name}', 'ProductController@manufacturer')->name('manufacturer');

Route::resource('/cart', 'CartController')->only([
    'index', 'store', 'update', 'destroy'
]);

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::post('/password', 'AdminController@changePassword')->name('password');
    Route::get('/password', 'AdminController@changePasswordView')->name('password.view');
    Route::resource('category', 'CategoryAdminController');
    Route::resource('product', 'ProductAdminController');
    Route::get('product-search/', 'ProductAdminController@search')->name('product-search');
    Route::get('orders', 'OrderAdminController@index')->name('orders');
    Route::get('orders/{id}', 'OrderAdminController@order')->name('admin-order');
    Route::put('order/update', 'OrderAdminController@update');

    Route::get('export', 'ExcelAdminController@export')->name('export');
    Route::get('import', 'ExcelAdminController@importView')->name('import.view');
    Route::post('import', 'ExcelAdminController@import')->name('import');
});