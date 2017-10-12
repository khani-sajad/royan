<?php

namespace App\Http\Controllers;

use App\ReferenceOffer;
use Illuminate\Http\Request;

class ReferenceOfferController extends Controller
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
        //validation
        $offer = Validate::offer();
        $ref_offer = Validate::reference_offer();

        //offer
        $offer_instance = \App\Offer::create($offer);
        Helper::check($offer_instance);

        //reference offer
        $ref_offer['offer_id'] = $offer_instance->id;
        Helper::check(\App\ReferenceOffer::create($ref_offer));

        //message and redirection
        Helper::flash();
        return back();
    }

    public function show(ReferenceOffer $referenceOffer)
    {
        //
    }

    public function edit(ReferenceOffer $referenceOffer)
    {
        //
    }

    public function update(ReferenceOffer $referenceOffer)
    {
        //
    }

    public function destroy(ReferenceOffer $referenceOffer)
    {
        //
    }
}
