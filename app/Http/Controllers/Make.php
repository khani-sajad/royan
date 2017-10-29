<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Make extends Controller
{
    public static function excel($data,$headers,$name)
    {
        array_unshift($data,$headers);
        $now = str_replace(':','-',\jDate::forge('now')->format('datetime'));
        \Excel::create($name.' '.$now, function($excel) use($data) {
            $excel->sheet('Sheet1', function($sheet) use($data) {
                $sheet->fromArray($data, null, 'A1', false, false);
            });
        })->store('xls', storage_path('excels/'.$name.'s'))->download('xls');
    }

    public static function reference($id, $type)
    {
        $reference['referencable_id'] = $id;
        $reference['referencable_type'] = 'App\\'.$type;
        $reference['dedicated_cards'] = 0;
        Helper::check(\App\Reference::create($reference));
    }

    public static function card($card, $id, $type)
    {
        $card['cardable_id'] = $id;
        $card['cardable_type'] = 'App\\'.$type;
        $card_instance = \App\Card::create($card);
        Helper::check($card_instance);
    }

    public static function user($user, $id, $type)
    {
        $user['userable_id'] = $id;
        $user['userable_type'] = 'App\\'.$type;
        $user['password'] = bcrypt($user['password']);
        $user_instance = \App\User::create($user);
        Helper::check($user_instance);
    }

    public static function transaction($transaction)
    {
        $transaction['receiver_id'] = userable_id();
        $transaction['customer_id'] = session('customer_id');
        $transaction['customer_type'] = session('customer_type');
        Helper::check(\App\Transaction::create($transaction));
        return $transaction;
    }

    public static function credit($credit_amount, $cash_amount)
    {
        $credit = \App\Credit::find(session('credit_id'));
        $receiver = \App\Receiver::find(userable_id());

        //essential informations about credits
        $amount = $credit ? rc($credit->amount) : 0;
        $points = $credit ? $credit->points : 0;
        $shop_count = $credit ? $credit->shop_count : 0;

        //check credit
        if( $credit_amount > $amount  ){
            die(jumbo_error('اعتبار شما کافی نیست'));
        }

        //calculatioins
        $amount -= $credit_amount;

        $amount += ( $receiver->base_gift_percentage / 100 ) * ( $credit_amount + $cash_amount );
        $points += $receiver->base_point;
        $shop_count++;

        if (!$credit) {
            $credit = new \App\Credit;
            $credit->card_id = session('card_id');
            $credit->receiver_id = $receiver->id;
        }

        $credit->amount = number_format($amount);
        $credit->points = $points;
        $credit->shop_count = $shop_count;

        Helper::check($credit->save());
    }
}
