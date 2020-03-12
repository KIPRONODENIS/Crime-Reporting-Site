<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WantedPerson;
use App\Incident;
use App\LostCase;
class WantedController extends Controller
{
    public function show(WantedPerson $person) {
   return view('wanted.details',compact('person'));
    }

    public function report(WantedPerson $person) {
    	$type="wanted";
   return view('wanted.report',compact('person','type'));
    }

    public function store(Request $request){
    	$request->validate([
      'location'=>'required',
      'description'=>'required'
    	]);
      
     if($request->type=="wanted") {

Incident::create([
'wanted_person_id'=>$request->id,
'user_id'=>\Auth::id(),
'location'=>$request->location,
 "description"=>$request->description
]);


session()->flash('success',"Report has beeen Successfully Sent");

return redirect()->back();
     }else {


        LostCase::create([
'missing_person_id'=>$request->id,
'user_id'=>2,
'location'=>\Auth::id(),
 "description"=>$request->description
]);


session()->flash('success',"Report has beeen Successfully Sent");

return redirect()->back();
   
     }

    }
}