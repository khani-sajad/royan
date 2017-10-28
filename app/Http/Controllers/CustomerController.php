<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

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
        $customer['registerby'] = auth()->id();
        $customer_instance = Customer::create($customer);
        Helper::check($customer_instance);

        //user
        $user = new \App\User;
        $user->username = request('mobile');
        $user->userable_id = $customer_instance->id;
        $user->userable_type = '\App\Customer';
        $user->password = bcrypt('123456');
        Helper::check($user->save());

        //card
        Make::card($card,$customer_instance->id,'Customer');

        //reference
        if(request('is_reference')){
          Make::reference($customer_instance->id,'Customer');
        }

        //flash message
        Helper::flash();

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
