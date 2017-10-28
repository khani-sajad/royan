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
        $from = request('number_from');
        $untill = request('number_untill');

        //extra check if user is not admin
        if(!\App\User::is_admin()){
            $reference_id = Get::current_reference()->id;
            for ($i=$from; $i <=$untill ; $i++) {
                $found = \App\Barg::where('number',$i)->where('registered_for_id', $reference_id)->first();
                if (!$found) {
                    Helper::message('این بازه از کارت ها به شما تعلق ندارد!','danger');
                    return back();
                }
            }
        }

        //preparing variables
        $to = request('to');
        $ref = \App\Reference::find($to);
        $range = range($from,$untill);

        //updating bargs
        if(\App\User::is_admin()){
            DB::table('bargs')->whereIn('number', $range)->update( ['registered_for_id' => $to] );
        }else {
            DB::table('bargs')->whereIn('number', $range)->update( ['reference_id' => $to] );
        }

        //updating reference itself
        $ref->dedicated_cards += count($range);
        $ref->save();

        //redirect
        Helper::flash();
        return back();
    }
}
