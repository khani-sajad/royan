<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(user $user)
    {
        //
    }

    public function edit(user $user)
    {
        //
    }

    public function update(Request $request, user $user)
    {
        if( ! Hash::check( request('current_password') , $user->password ) ){
          return back()->withErrors(['رمز عبور فعلی را صحیح وارد نکرده اید.']);
        }

        if ( request('type') == 'password' ) {

          request()->validate([
            'new_password' => 'required|confirmed|min:6'
          ]);
          request()->user()->fill([
              'password' => Hash::make(request('new_password'))
          ])->save();
          Auth::logout();

        }elseif ( request('type') == 'username' ) {

          $validated = request()->validate([
            'username' => 'required|unique:users|min:3'
          ]);
          $user->username = $validated['username'];
          $user->save();
          
        }else {
          return back();
        }

        Helper::flash_message();
        return back();
    }

    public function destroy(user $user)
    {
        //
    }
}
