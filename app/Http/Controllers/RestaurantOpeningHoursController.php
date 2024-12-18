<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantOpeningHoursController extends Controller
{
    public function index()
    {
        return view('pages.RestaurantOpeningHours');
    }
}
