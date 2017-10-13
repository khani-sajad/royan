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
          $amount = rc($credit->amount);
          $amount += 0.1 * $amount; //HARDCODE
          // $amount += session('transaction_reward');
          $amount -= rc(request('credit_amount'));
          $credit->amount = number_format($amount);
          Helper::check($credit->save());

        }else {
          Helper::flash(false);
        }

        session()->forget('customer_id');
        session()->forget('customer_type');
        session()->forget('credit_id');

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
