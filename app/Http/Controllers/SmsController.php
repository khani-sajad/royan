<?php

namespace App\Http\Controllers;

use App\Services\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmsController extends Controller
{
    public function customer_cards_amount() {

        $mobile = request('mobile');

        //we can make decision based on customer input text
        //$sms_text = request('sms_text');

        $amount = DB::table('customers')
            ->leftJoin('cards', 'cards.cardable_id', '=', 'customers.id')
            ->leftJoin('credits', 'credits.card_id', '=', 'cards.id')
            ->where('customers.mobile', '=', $mobile)
            ->sum('amount');

            $text = "اعتبار شما $amount تومان می باشد";


        return Sms::send($mobile,$text);

    }
}
