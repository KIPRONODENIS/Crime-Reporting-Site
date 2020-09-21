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


session()->flash('success',"Report has been Successfully Sent");

return redirect()->back();
   
     }

    }

public function UpdateStatus(Request $request, Incident $wanted) {


      $wanted->update([
   'status'=>$request->status
      ]);

session()->flash('success',"Status update successful!!");

return redirect()->back();
    }




    public function create(){

      return view('wanted.new');
    }

    public function newWanted(Request $request) {

$request->validate([
 'name'=>'required|min:2',
 'crime'=>'required',
 
 'image'=>'required',
 'reward'=>'required',
 'description'=>'required'
]);

      WantedPerson::create([
     "crime"=>$request->crime,
     "reward"=>$request->reward,
     'name'=>$request->name,
     'image'=>$request->image->store('images',['disk'=>'public']),
     "description"=>$request->description

      ]);




session()->flash('success',"Criminal Successfully posted!!");

return redirect()->back();


    }
}