<?php

namespace App\Http\Controllers;

use App\Barg;
use Illuminate\Http\Request;

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

        //check for duplicate card
        for ($i=$from; $i <=$untill ; $i++) {
            if (Barg::where('number',$i)->first()) {
                $message = "خطا: کارتی با شماره $i قبلا در سیستم تعریف شده است.";
                Helper::message($message,'danger');
                return back();
            }
        }

        //assigning random unique ids to each barg and saving them
        $data[] = ['شماره کارت','آیدی ویژه'];
        for ($i=$from; $i <=$untill ; $i++) {
            $uid = bin2hex(openssl_random_pseudo_bytes(6));

            $row = [];
            $row[] = (string) $i;
            $row[] = $uid;

            $barg = new Barg;
            $barg->number = $i;
            $barg->uid = $uid;

            $data[] = $row;
            $barg->save();
        }

        //creating excel for it
        $now = str_replace(':','-',\jDate::forge('now')->format('datetime'));
        \Excel::create('IQBargs '.$now, function($excel) use($data) {

            $excel->sheet('آیکیو برگ ها', function($sheet) use($data) {

                $sheet->fromArray($data, null, 'A1', false, false);

            });


        })->store('xls', storage_path('excels'))->download('xls');

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
