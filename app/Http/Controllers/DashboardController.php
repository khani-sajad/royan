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
      if (auth()->user()->userable_type != 'Admin') {
        abort(404);
      }
      if ($dashboard == 'users_list') {
        $users = \App\User::all();
        return view('home',compact('dashboard','users'));
      }
      if ($dashboard == 'offers_list') {
        $offers = \App\Offer::all();
        return view('home',compact('dashboard','offers'));
      }
      return view('home',compact('dashboard'));
    }
}
