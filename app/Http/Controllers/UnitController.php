<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::paginate(14);

        return view('admin.units.units')->with(['units' => $units]);
    }


}
