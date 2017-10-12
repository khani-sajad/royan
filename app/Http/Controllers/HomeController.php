<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (ra(auth()->user()->userable_type)) {
          case 'Admin':
            return redirect('admin/users_list');
            break;
          case 'Receiver':
            return redirect('receiver/acc_management');
            break;

          default:
            break;
        }//switch
    }
}
