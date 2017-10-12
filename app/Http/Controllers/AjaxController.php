<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_card_owner()
    {
      $uid = request('uid');
      $card = \App\Card::where('uid',$uid)->first();
      if(!$card){
        return view('partials.card_not_found');
      }
      $owner_type = ra($card->cardable_type);
      $owner = $card->cardable;
      return view('partials.card',compact('card','owner','owner_type'));
    }
}
