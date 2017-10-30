<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('forms');
    }

    public function index()
    {
        switch (userable_type()) {
          case 'admin':
            return redirect('admin/acc_management');
            break;
          case 'receiver':
            return redirect('receiver/acc_management');
            break;

          default:
            break;
        }//switch
    }

    public function forms($form)
    {
        return view('crmforms.form'.$form);
    }
}
