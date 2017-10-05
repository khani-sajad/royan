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
        $card = $this->validate_card();
        $user = UserController::validation('receiver');
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
            "contact_name" => "nullable",
            "telegram_channel" => "required|unique:receivers",
            "telegram_id" => "required|unique:receivers",
            "instagram_id" => "required|unique:receivers",
            "state" => "nullable",
            "city" => "nullable",
            "city_region" => "nullable",
            "guild" => "nullable",
            "shopping_center" => "nullable",
            "commision_percentage_for_introducer" => "nullable",
            "commision_points_for_introducer" => "nullable|integer",
            "commision_percentage_for_network" => "nullable",
            "commision_points_for_network" => "nullable|integer",
            "monthly_support_for_network" => "nullable",
            "base_discount_percentage" => "nullable|integer",
            "base_point" => "nullable|integer",
            "number_of_lotteries" => "nullable|integer",
            "awards_list" => "nullable",
            "sell_type" => "nullable",
            "activity_type" => "nullable",
            "is_reference" => "nullable",
        ]);
    }
}
