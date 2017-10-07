<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function admin($dashboard)
    {
      //make sure the user is admin
      if (auth()->user()->userable_type != 'Admin') {
        abort(404);
      }

      //determining dashboard type
      $dashboard_type = 'admin';

      //switching cases
      switch ($dashboard) {
        case 'users_list':
          $users = \App\User::all();
          return view('home',compact('dashboard','dashboard_type','users'));
          break;
        case 'offers_list':
          $offers = \App\Offer::all();
          return view('home',compact('dashboard','offers','dashboard_type'));
          break;
        default:
          return view('home',compact('dashboard','dashboard_type'));
          break;
      }
    }

    public function receiver($dashboard)
    {
      // make sure the user is a receiver
      if (auth()->user()->userable_type != 'Receiver') {
        abort(404);
      }

      //determining dashboard type
      $dashboard_type = 'receiver';

      //switching cases
      switch ($dashboard) {
        case 'xxxx':
          break;

        default:
          return view('home',compact('dashboard','dashboard_type'));
          break;
      }
    }
}
