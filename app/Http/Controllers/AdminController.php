<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PoliceStation;
use App\County;
use App\SubCounty;
use App\User;
use App\WantedPerson;
use App\MissingPerson;
class AdminController extends Controller
{
    public function index() {
    	return view('admin.index');
    }

        public function stations() {
  $police_stations=PoliceStation::all();
    	return view('admin.station',compact('police_stations'));
    }

     public function counties() {
  $counties=County::all();
    	return view('admin.counties',compact('counties'));
    }          

    public function subcounties() {
         $subcounties=SubCounty::all();
    	return view('admin.subcounties',compact('subcounties'));
    }

    public function police() {
         $polices=User::where('police_station_id','!=',null)->get();

    	return view('admin.police',compact('polices'));
    }

    public function wanted() {

$wanted=WantedPerson::all();

return view('admin.wanted', compact('wanted'));
    }

    public function missing() {

    $MissingPersons=MissingPerson::all();
    return view('admin.missing', compact('MissingPersons'));
    }
}
