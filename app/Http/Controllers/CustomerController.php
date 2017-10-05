<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //validations
        $customer = Validate::customer();
        $card = Validate::card();
        
        //customer
        $customer_instance = Customer::create($customer);
        Helper::check($customer_instance);

        //user
        $user = new \App\User;
        $user->name = request('mobile');
        $user->userable_id = $customer_instance->id;
        $user->userable_type = 'Customer';
        $user->password = Hash::make('123456');
        Helper::check($user->save());

        //card
        $card['cardable_id'] = $customer_instance->id;
        $card['cardable_type'] = 'Customer';
        $card_instance = \App\Card::create($card);
        Helper::check($customer_instance);

        //flash message
        Helper::flash_message();

        //redirection
        return back();
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        //
    }

    public function update(Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }

}
