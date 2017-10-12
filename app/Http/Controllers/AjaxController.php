<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_card_owner()
    {
      $result = [];
      $uid = request('uid');

      $card = \App\Card::where('uid',$uid)->first();
      $result['card'] = $card;

      // $cardable = $card

      return $card->cardable;
    }
}
