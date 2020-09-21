<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MissingPerson;
use App\LostCase;
use Carbon\Carbon;
class MissingController extends Controller
{
      public function show(MissingPerson $person) {
   
   return view('missing.details',compact('person'));
    }

    public function report(MissingPerson $person) {
    	$type="missing";
   return view('missing.report',compact('person','type'));
    }


public function UpdateStatus(Request $request, LostCase $missing) {


      $missing->update([
   'status'=>$request->status
      ]);

session()->flash('success',"Status update successful!!");

return redirect()->back();
    }


    public function create(){

      return view('missing.new');
    }
    
    public function newMissing(Request $request) {

    
      $request->validate([
'name'=>'required',
'location'=>'required',
'description'=>'required',
'date_lost'=>'required',
'image'=>'required|image'
      ]);

       MissingPerson::create([

'name'=>$request->name,
'location'=>$request->location,
 'image'=>$request->image->store('images',['disk'=>'public']),
'description'=>$request->description,
'police_station_id'=>\Auth::user()->station->id,
'date_lost'=>new Carbon($request->date_lost)
 ]);


session()->flash('success',"Criminal Successfully posted!!");

return redirect()->back();
    }
}
