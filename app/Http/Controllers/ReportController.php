<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crime;
class ReportController extends Controller
{
    public function index() {
      return view('report');
    }


    public function store(Request $request) {
  $request->validate([
    'title'=>'required',
    'type'=>'required',
    'station'=>'required',
    'county'=>'required',
    'subcounty'=>'required',
    'area'=>'required',
    'description'=>'required',
  ]);

      Crime::create([
        'title'=>$request->title,
        'type'=>$request->type,
        'police_station_id'=>$request->station,
        'county_id'=>$request->county,
        'user_id'=>\Auth::id(),
        'sub_county_id'=>$request->subcounty,
        'area'=>$request->area,
        'description'=>$request->description
      ]);
session()->flash('success',"Crime created successfully");
      return redirect()->back();

    }
}
