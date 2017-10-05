<?php

namespace App\Http\Controllers;

use App\Receiver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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
        //validations
        $receiver = Validate::receiver();
        $card = Validate::card();
        $user =  Validate::user();

        //receiver
        $receiver_instance = Receiver::create($receiver);
        Helper::check($receiver_instance);

        //card
        $card['cardable_id'] = $receiver_instance->id;
        $card['cardable_type'] = 'Receiver';
        $card_instance = \App\Card::create($card);
        Helper::check($card_instance);

        //user
        $user['userable_id'] = $receiver_instance->id;
        $user['userable_type'] = 'Receiver';
        $user_instance = \App\User::create($user);
        Helper::check($user_instance);

        //flash message
        Helper::flash_message();

        //redirection
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


}
