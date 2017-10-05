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
        $customer = self::validation();
        $card = $this->validate_card('');
        $user = new \App\User;
        $user->name = request('mobile');
        $user->password = Hash::make('000000');
        if($user->save() && $instance = \App\Card::create($card)){
          $customer['card_id'] = $instance->id;
          $this->flash_message(Customer::create($customer) );
        }
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

    public static function validation()
    {
        return request()->validate([
            "mobile" => "required|string|digits:11|unique:customers",
            "natinal_code" => "nullable|digits:10|unique:customers",
            "first_name" => "nullable|string",
            "last_name" => "nullable|string",
            "job" => "nullable|string",
            "state" => "nullable|string",
            "city" => "nullable|string",
            "city_region" => "nullable|string",
            "birthday" => "nullable",
            "marriage_date" => "nullable",
            "person_type" => "nullable",
            "buy_type" => "nullable",
        ]);
    }
}
