<?php

//home page
Route::get('/', function () {
    return view('welcome');
});

//resources
Route::resource('users','UserController');
Route::resource('receivers','ReceiverController');
Route::resource('customers','CustomerController');
Route::resource('legals','LegalController');
Route::resource('offers','OfferController');
Route::resource('bargs','BargController');
Route::resource('reference_offers','ReferenceOfferController');
Route::resource('transactions','TransactionController');
Route::resource('barg_transactions','BargTransactionController');

//authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//dashboards
Route::get('/admin/{dashboard}', 'DashboardController@admin');
Route::get('/receiver/{dashboard}', 'DashboardController@receiver');

//Ajax Requests
Route::post('/receiver/new_transaction', 'AjaxController@get_card_owner');
Route::post('/receiver/new_barg_transaction', 'AjaxController@get_barg_details');

//other
Route::post('assign_iq_bargs','BargController@assign');

//CRM Forms
Route::get('/forms/{form}', 'HomeController@forms');

//SMS
Route::get('/sms/customer/{mobile}/amount', 'SmsController@customer_cards_amount');