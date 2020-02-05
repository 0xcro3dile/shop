<?php

namespace App\Http\Controllers;

use App\Unit;
use Session;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::paginate(14);

        return view('admin.units.units')->with(['units' => $units]);
    }

    public  function store(Request $request){
     $request->validate([
        'unit_name'=>'required',
         'units_code'=>'required'

     ]);
     $unit = new Unit();
     $unit->unit_name = $request->input('unit_name');
     $unit->units_code= $request->input('units_code');
     $unit->save();
       Session::flash('message', "unit ". $unit->unit_name.' has been added');

        return redirect()->back();
    }

    public function delete(Request $request){
        $id = $request->input('units_id');
        Unit::destroy($id);
        Session::flash('message', 'unit has been deleted');
        return redirect()->back();


    }

}
