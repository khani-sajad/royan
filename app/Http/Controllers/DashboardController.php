<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function admin($dashboard)
    {
        //determining dashboard type
        $dashboard_type = 'admin';

        //make sure the user is admin
        if ( ra(auth()->user()->userable_type) != $dashboard_type ) {
            abort(404);
        }

        //switching cases
        switch ($dashboard) {
            case 'users_list':
                $users = \App\User::all();
                return view('home',compact('dashboard','dashboard_type','users'));
                break;
            case 'offers_list':
                $offers = \App\Offer::all();
                return view('home',compact('dashboard','dashboard_type','offers'));
                break;
            case 'legal_customer':
            case 'real_customer':
                $ud = \App\Barg::undedicateds();
                $undedicateds = end($ud);
                $barg_from = array_shift($undedicateds)->number;
                $barg_untill = end($undedicateds)->number;
                $total_bargs = count(\App\Receiver::find(auth()->user()->userable_id)->bargs);
                return view('home',compact('dashboard','dashboard_type','barg_from','barg_untill','total_bargs'));
                break;
            default:
                return view('home',compact('dashboard','dashboard_type'));
                break;
        }
    }

    public function receiver($dashboard)
    {
        //determining dashboard type
        $dashboard_type = 'receiver';

        // make sure the user is a receiver
        if ( ra(auth()->user()->userable_type) != $dashboard_type ) {
            abort(404);
        }

        //switching cases
        switch ($dashboard) {
            case 'transactions_list':
                $transactions = \App\Transaction::where('receiver_id', auth()->user()->userable_id)->latest()->paginate(10);
                return view('home',compact('dashboard','dashboard_type','transactions'));
                break;
            case 'customers':
                $customers = \App\Customer::where('registerby',auth()->id())->paginate(20);
                return view('home',compact('dashboard','dashboard_type','customers'));
                break;
            case 'legals':
                $legals = \App\Legal::where('registerby',auth()->id())->paginate(20);
                return view('home',compact('dashboard','dashboard_type','legals'));
                break;
            case 'base_management':
                $receiver = \App\Receiver::find(auth()->user()->userable_id);
                return view('home',compact('dashboard','dashboard_type','receiver'));
                break;
            case 'legal_customer':
            case 'real_customer':
                $ud = \App\Barg::undedicateds();
                $undedicateds = end($ud);
                $barg_from = array_shift($undedicateds)->number;
                $barg_untill = end($undedicateds)->number;
                $total_bargs = count(\App\Receiver::find(auth()->user()->userable_id)->bargs);
                return view('home',compact('dashboard','dashboard_type','barg_from','barg_untill','total_bargs'));
                break;
            case 'iq_bargs':
                $bargs = \App\Receiver::find(auth()->user()->userable_id)->bargs;
                return view('home',compact('dashboard','dashboard_type','bargs'));
                break;

            default:
                return view('home',compact('dashboard','dashboard_type'));
                break;
        }
    }
}
