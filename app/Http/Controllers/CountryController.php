<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(14);
        return view('admin.countreis.countries')->with(['countries' => $countries]);
    }
}
