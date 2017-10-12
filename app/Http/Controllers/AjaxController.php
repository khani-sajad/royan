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
      if(!$card) return view('partials.card_not_found');

      //owner
      $owner = $card->cardable;

      //credit (network for future)
      $credit = \App\Credit::where('card_id',$card->id)->where('receiver_id', auth()->user()->userable_id)->first();
      $credit_amount = $credit ? $credit->amount : 0;

      $owner_type = ra($card->cardable_type);

      session(['customer_id' => $owner->id, 'customer_type' => $owner_type, 'credit_id' => $credit->id]);

      return view('partials.card',compact('card','owner','owner_type','credit_amount'));
    }
}
