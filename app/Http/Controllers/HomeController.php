<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        switch (ra(auth()->user()->userable_type)) {
          case 'admin':
            return redirect('admin/users_list');
            break;
          case 'receiver':
            return redirect('receiver/acc_management');
            break;

          default:
            break;
        }//switch
    }
}
