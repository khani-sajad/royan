<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Make extends Controller
{
    public static function reference($reference, $id, $type)
    {
        $reference['referencable_id'] = $id;
        $reference['referencable_type'] = '\App\\'.$type;
        $reference_instance = \App\Reference::create($reference);
        Helper::check($reference_instance);
    }

    public static function card($card, $id, $type)
    {
        $card['cardable_id'] = $id;
        $card['cardable_type'] = '\App\\'.$type;
        $card_instance = \App\Card::create($card);
        Helper::check($card_instance);
    }

    public static function user($user, $id, $type)
    {
        $user['userable_id'] = $id;
        $user['userable_type'] = '\App\\'.$type;
        $user['password'] = bcrypt($user['password']);
        $user_instance = \App\User::create($user);
        Helper::check($user_instance);
    }
}
