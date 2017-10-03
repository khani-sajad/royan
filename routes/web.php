<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('receivers','ReceiverController');
Route::resource('customers','CustomerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/{dashboard}', 'DashboardController@admin')->name('admin');
