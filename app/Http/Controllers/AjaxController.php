<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_card_owner()
    {
      //card
      if ( $uid = request('uid') ) {
        $card = \App\Card::where('uid',$uid)->first();
      }elseif ( $mobile = request('mobile') ) {
        $customer = \App\Customer::where('mobile',$mobile)->first();
        $card = $customer ? $customer->card : null;
      }elseif ( $national_code = request('national_code') ) {
        $customer = \App\Customer::where('national_code',$national_code)->first();
        $card = $customer ? $customer->card : null;
      }else {
        return view('partials.card_not_found');
      }
      if(!$card) return view('partials.card_not_found');

      //owner
      $owner = $card->cardable;

      //credit
      $credit = \App\Credit::where('card_id',$card->id)->where('receiver_id', auth()->user()->userable_id)->first();

      $credit_id = $credit ? $credit->id : 0;

      $owner_type = ra($card->cardable_type);

      session(['customer_id' => $owner->id, 'card_id' => $card->id, 'customer_type' => $owner_type, 'credit_id' => $credit_id]);

      return view('partials.card',compact('card','owner','owner_type','credit'));
    }
}
