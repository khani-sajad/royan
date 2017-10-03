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
      if (auth()->user()->type != 'admin') {
        abort(404);
      }
      return view('home',compact('dashboard'));
    }
}
