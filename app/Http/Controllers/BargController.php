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

    public function store(Request $request)
    {
        $from = request('number_from');
        $untill = request('number_untill');

        //Creating a lot of bargs takes a long time!
        ini_set('max_execution_time', 0);

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

    public function update(Request $request, Barg $barg)
    {
        //
    }

    public function destroy(Barg $barg)
    {
        //
    }
}
