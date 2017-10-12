<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users','UserController');
Route::resource('receivers','ReceiverController');
Route::resource('customers','CustomerController');
Route::resource('legals','LegalController');
Route::resource('offers','OfferController');
Route::resource('reference_offers','ReferenceOfferController');
Route::resource('transactions','TransactionController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/{dashboard}', 'DashboardController@admin');
Route::get('/receiver/{dashboard}', 'DashboardController@receiver');

Route::post('/receiver/new_transaction', 'AjaxController@get_card_owner');
