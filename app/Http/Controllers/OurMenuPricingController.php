<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurMenuPricingController extends Controller
{
    public function index()
    {
        return view('pages.OurMenuPricing');
    }
}
