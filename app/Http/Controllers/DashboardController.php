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
          return view('home',compact('dashboard','offers','dashboard_type'));
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
        case 'xxxx':
          break;

        default:
          return view('home',compact('dashboard','dashboard_type'));
          break;
      }
    }
}
