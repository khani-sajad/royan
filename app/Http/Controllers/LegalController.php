<?php

namespace App\Http\Controllers;

use App\Legal;
use Illuminate\Http\Request;

class LegalController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //validations
        $legal = Validate::legal();
        $card = Validate::card();
        $user =  Validate::user();

        //legal
        $legal['registerby'] = auth()->id();
        $legal_instance = Legal::create($legal);
        Helper::check($legal_instance);

        //card
        Make::card($card,$legal_instance->id,'Legal');

        //user
        Make::user($user,$legal_instance->id,'Legal');

        //reference
        if(request('is_reference')){
          Make::reference($legal_instance->id,'Legal');
        }

        //flash message
        Helper::flash();

        //redirection
        return back();
    }

    public function show(Legal $legal)
    {
        //
    }

    public function edit(Legal $legal)
    {
        //
    }

    public function update(Legal $legal)
    {
        //
    }

    public function destroy(Legal $legal)
    {
        //
    }
}
