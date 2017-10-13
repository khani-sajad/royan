<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
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

        $transaction = Validate::transaction();
        if( request('cash_amount') || request('credit_amount') ){

          //creating a transaction
          $transaction['receiver_id'] = auth()->user()->userable_id;
          $transaction['customer_id'] = session('customer_id');
          $transaction['customer_type'] = session('customer_type');
          Helper::check(\App\Transaction::create($transaction));

          //reducing and incrementing credit
          $credit = \App\Credit::find(session('credit_id'));
          $amount = $credit ? rc($credit->amount) : 0;
          $amount -= rc(request('credit_amount'));
          $amount += 0.1 * ( rc(request('credit_amount')) + rc(request('cash_amount')) ); //HARDCODE
          if (!$credit) {
            $credit = new \App\Credit;
            $credit->card_id = session('card_id');
            $credit->receiver_id = auth()->user()->userable_id;
          }
          $credit->amount = number_format($amount);
          Helper::check($credit->save());
        }else {
          Helper::flash(false);
        }

        session()->forget('customer_id');
        session()->forget('customer_type');
        session()->forget('credit_id');
        session()->forget('card_id');

        Helper::flash(true);
        return back();
    }

    public function show(Transaction $transaction)
    {
        //
    }

    public function edit(Transaction $transaction)
    {
        //
    }

    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    public function destroy(Transaction $transaction)
    {
        //
    }
}
