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

        //setting sessions
        session(compact('dashboard','dashboard_type'));

        //switching cases
        switch ($dashboard) {
            case 'customers':
                $customers = \App\Customer::paginate(20);
                return view('home',compact('customers'));
                break;
            case 'legals':
                $legals = \App\Legal::paginate(20);
                return view('home',compact('legals'));
                break;
            case 'iq_bargs':
                $bargs = \App\Barg::paginate(24);
                return view('home',compact('bargs'));
                break;
            case 'barg_basic_define':
                $files = scandir(storage_path('excels/IQBargs'));
                $count = DB::table('bargs')->count('*');
                return view('home',compact('count','files'));
                break;
            case 'assign_iq_barg':
                $references = \App\Reference::all();
                $receivers = \App\Receiver::all();
                return view('home',compact('references','receivers'));
                break;
            default:
                return view('home');
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

        //setting sessions
        session(compact('dashboard','dashboard_type'));

        //switching cases
        switch ($dashboard) {
            case 'transactions_list':
                $transactions = \App\Transaction::where('receiver_id', auth()->user()->userable_id)->latest()->paginate(10);
                return view('home',compact('transactions'));
                break;
            case 'customers':
                $customers = \App\Customer::where('registerby',auth()->id())->paginate(20);
                return view('home',compact('customers'));
                break;
            case 'legals':
                $legals = \App\Legal::where('registerby',auth()->id())->paginate(20);
                return view('home',compact('legals'));
                break;
            case 'base_management':
                $receiver = \App\Receiver::find(auth()->user()->userable_id);
                return view('home',compact('receiver'));
                break;
            case 'legal_customer':
            case 'real_customer':
                $ud = \App\Barg::undedicateds();
                $undedicateds = end($ud);
                $barg_from = array_shift($undedicateds)->number;
                $barg_untill = end($undedicateds)->number;
                $total_bargs = count(\App\Receiver::find(auth()->user()->userable_id)->bargs);
                return view('home',compact('barg_from','barg_untill','total_bargs'));
                break;
            case 'barg_transactions_list':
                $list = \App\BargTransaction::where('receiver_id', auth()->user()->userable_id)->latest()->paginate(10);
                return view('home',compact('list'));
                break;
            case 'iq_bargs':
                $id = auth()->user()->userable_id;
                $reference_id = \App\Receiver::find($id)->reference->id;
                $bargs = \App\Barg::where('registered_for_id',$reference_id)->orWhere('reference_id',$reference_id)->paginate(24);
                return view('home',compact('bargs'));
                break;
            case 'assign_iq_barg':
                $references = \App\Reference::all();
                $receivers = \App\Receiver::all();
                return view('home',compact('references','receivers'));
                break;

            default:
                return view('home',compact('dashboard','dashboard_type'));
                break;
        }
    }
}
