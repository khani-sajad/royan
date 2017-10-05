<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validate extends Controller
{
    public static function customer()
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

    public static function card()
    {
        return request()->validate([
          "uid" => "required|unique:cards",
          "number" => "required|unique:cards",
          "type" => "nullable"
        ]);
    }

    public static function receiver()
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

    public static function user()
    {
        return request()->validate([
            "name" => "required|unique:users",
            "password" => "required",
            "email" => "nullable|email|unique:users",
        ]);
    }
}
