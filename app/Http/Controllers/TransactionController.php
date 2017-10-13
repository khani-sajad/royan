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
          $transaction = Make::transaction($transaction);

          //reducing and incrementing credit
          $credit = Make::credit( rc(request('credit_amount')) , rc(request('cash_amount')) );

        }else {
          Helper::flash(false);
        }

        Helper::flash(true);
        return redirect('/receiver/transactions_list');
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
