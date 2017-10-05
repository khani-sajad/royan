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
        $legal_instance = Legal::create($legal);
        Helper::check($legal_instance);

        //card
        $card['cardable_id'] = $legal_instance->id;
        $card['cardable_type'] = 'Legal';
        $card_instance = \App\Card::create($card);
        Helper::check($card_instance);

        //user
        $user['userable_id'] = $legal_instance->id;
        $user['userable_type'] = 'Legal';
        $user_instance = \App\User::create($user);
        Helper::check($user_instance);

        //flash message
        Helper::flash_message();

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
