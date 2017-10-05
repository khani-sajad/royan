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
        $reference = request('is_reference') ? Validate::reference() : null;

        //receiver
        $receiver_instance = Receiver::create($receiver);
        Helper::check($receiver_instance);

        //card
        Make::card($card,$receiver_instance->id,'Receiver');

        //user
        Make::user($user,$receiver_instance->id,'Receiver');

        //reference
        if($reference){
          Make::reference($reference,$receiver_instance->id,'Receiver');
        }

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
