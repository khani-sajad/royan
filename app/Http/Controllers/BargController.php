<?php

namespace App\Http\Controllers;

use App\Barg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BargController extends Controller
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
        $from = request('number_from');
        $untill = request('number_untill');

        //Creating a lot of bargs takes a long time!
        ini_set('max_execution_time', 60);

        //check for duplicate card and validate
        if($from >= $untill) return back();
        if ( Barg::where('number',$from)->first() || Barg::where('number',$untill)->first() ) {
            $message = "خطا: تداخل در شماره کارت ها";
            Helper::message($message,'danger');
            return back();
        }

        //creating the data
        for ($i=$from; $i <=$untill ; $i++) {
            $uid = bin2hex(openssl_random_pseudo_bytes(6));
            $row = [];
            $row['number'] = (string) $i;
            $row['uid'] = $uid;
            $data[] = $row;
        }

        //saving them in database
        Barg::insert($data);

        //creating excel for it
        $headers = ['شماره کارت','آیدی ویژه'];
        Make::excel($data,$headers,'IQBarg');
    }

    public function show(Barg $barg)
    {
        //
    }

    public function edit(Barg $barg)
    {
        //
    }

    public function update(Barg $barg)
    {
        //
    }

    public function destroy(Barg $barg)
    {
        //
    }

    public function assign()
    {
        //validation
        request()->validate([
            'number_from'   => 'required|integer|exists:bargs,number',
            'number_untill' => 'required|integer|exists:bargs,number',
            'to'            => 'required|integer|exists:references,id'
        ]);

        //preparing variables
        $to = request('to');
        $ref = \App\Reference::find($to);
        $type = ra($ref->referencable_type);
        $range = range(request('number_from'),request('number_untill'));

        //updating bargs
        DB::table('bargs')->whereIn('number', $range)->update([
            'registered_for_id' => $to,
            'registered_for_type' => $type
        ]);

        //updating reference itself
        $ref->dedicated_cards += count($range);
        $ref->save();


        Helper::flash();
        return back();
    }
}
