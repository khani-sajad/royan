<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
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
        $offer = Validate::offer();
        Helper::check(\App\Offer::create($offer));
        Helper::flash_message();
        return back();
    }

    public function show(Offer $offer)
    {
        //
    }

    public function edit(Offer $offer)
    {
        //
    }

    public function update(Offer $offer)
    {
        //
    }

    public function destroy(Offer $offer)
    {
        //
    }
}
