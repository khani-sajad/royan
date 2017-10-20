<?php

namespace App\Http\Controllers;

use App\BargTransaction;
use Illuminate\Http\Request;

class BargTransactionController extends Controller
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
        //validation
        request()->validate([
            'amount' => 'required',
            'description' => 'nullable|string'
        ]);

        //marking the Barg as used
        $barg = \App\Barg::find(session('barg_id'));
        $barg->used = 1;
        $barg->save();

        //creating a new Barg Transaction
        $bt = new \App\BargTransaction;
        $bt->amount = request('amount');
        $bt->description = request('description');
        $bt->reference_id = session('reference_id');
        $bt->barg_number = session('barg_number');
        $bt->receiver_id = auth()->user()->userable_id;
        $bt->save();

        Helper::flash();
        return redirect('/receiver/barg_transactions_list');
    }

    public function show(BargTransaction $bargTransaction)
    {
        //
    }

    public function edit(BargTransaction $bargTransaction)
    {
        //
    }

    public function update(BargTransaction $bargTransaction)
    {
        //
    }

    public function destroy(BargTransaction $bargTransaction)
    {
        //
    }
}
