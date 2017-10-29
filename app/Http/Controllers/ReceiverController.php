<?php

namespace App\Http\Controllers;

use App\Receiver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

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
        Make::card($card,$receiver_instance->id,'Receiver');

        //user
        Make::user($user,$receiver_instance->id,'Receiver');

        //reference
        if(request('is_reference')){
          Make::reference($receiver_instance->id,'Receiver');
        }

        //flash message
        Helper::flash();

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
        if ($receiver->id != userable_id() && userable_type() != 'admin') {
            abort(404);
        }
        foreach ( request()->all() as $key => $value ) {
          if(Schema::hasColumn('receivers',$key) && request($key) != $receiver->$key){
            switch ($key) {
              case 'business_name':
              case 'register_number':
              case 'register_number':
                request()->validate([ $key => 'required' ]);
                break;
              case 'telegram_chanel':
              case 'telegram_id':
              case 'instagram_id':
                request()->validate([ $key => 'required|unique:receivers' ]);
                break;
            }
          }
        }

        Helper::check($receiver->update(request()->all()));
        Helper::flash();
        return back();
    }

    public function destroy(Receiver $receiver)
    {
        //
    }


}
