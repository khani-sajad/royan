<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

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
        //
    }

    public function destroy(user $user)
    {
        //
    }

    public static function validation($type)
    {
      $validated_user = request()->validate([
          "name" => "required|unique:users",
          "password" => "required",
          "email" => "nullable|email|unique:users",
      ]);
      $validated_user['type'] = $type;
      return $validated_user;
    }
}
