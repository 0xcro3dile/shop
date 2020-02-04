<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $states = State::paginate(14);
        return view('admin.states.states')->with(['states' => $states]);
    }
}
