<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function main($dashboard)
    {
      return view('home',compact('dashboard'));
    }
}
