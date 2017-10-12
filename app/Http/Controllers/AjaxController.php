<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_card_owner()
    {
      $uid = request('uid');
      //card
      $card = \App\Card::where('uid',$uid)->first();
      $owner_type = strtolower(str_replace('App\\','',$card->cardable_type));
      $owner = $card->cardable;
      return view('partials.card',compact('card','owner','owner_type'));
    }
}
