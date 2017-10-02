<?php

namespace App\Http\Controllers;

use App\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends Controller
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
        $receiver = self::validation();
        $user = UserController::validation();
        $this->flash_message( \App\User::create($user) && Receiver::create($receiver) );

        return back();
    }

    public function show(Receiver $receiver)
    {
        //
    }

    public function edit(Receiver $receiver)
    {
        //
    }

    public function update(Receiver $receiver)
    {
        //
    }

    public function destroy(Receiver $receiver)
    {
        //
    }

    public static function validation()
    {
        return request()->validate([
            "business_name" => "required",
            "register_number" => "required",
            "manager_name" => "required",
            "contact_name" => "",
            "telegram_channel" => "required|unique:receivers",
            "telegram_id" => "required|unique:receivers",
            "instagram_id" => "required|unique:receivers",
            "state" => "",
            "city" => "",
            "city_region" => "",
            "guild" => "",
            "shopping_center" => "",
            "commision_percentage_for_introducer" => "",
            "commision_points_for_introducer" => "",
            "commision_percentage_for_network" => "",
            "commision_points_for_network" => "",
            "monthly_support_for_network" => "",
            "base_discount_percentage" => "",
            "base_point" => "",
            "number_of_lotteries" => "",
            "awards_list" => "",
            "sell_type" => "",
            "activity_type" => "",
            "is_reference" => "",
        ]);
    }
}
