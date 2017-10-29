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
            'phone' => 'required'
        ]);

        //create a new buyer
        $found = \App\Buyer::where('phone',request('phone'))->first();
        if(!$found){
            $buyer = new \App\Buyer;
            $buyer->phone = request('phone');
            $buyer->full_name = request('full_name');
            $buyer->city = request('city');
            $buyer->save();
            $buyer_id = $buyer->id;
        }else {
            $buyer_id = $found->id;
        }

        //creating a new Barg Transaction
        $bt = new \App\BargTransaction;
        $bt->amount = number_format(floor(rc(request('amount'))/10));
        $bt->description = request('description');
        $bt->reference_id = session('reference_id');
        $bt->barg_number = session('barg_number');
        $bt->receiver_id = auth()->user()->userable_id;
        $bt->buyer_id = $buyer_id;
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
