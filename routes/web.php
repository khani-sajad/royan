<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('receivers','ReceiverController');
Route::resource('customers','CustomerController');
Route::resource('legals','LegalController');
Route::resource('offers','OfferController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/{dashboard}', 'DashboardController@admin')->name('admin');
