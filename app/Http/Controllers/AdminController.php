<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PoliceStation;
use App\County;
use App\SubCounty;
use App\User;
use App\WantedPerson;
use App\MissingPerson;
use App\Crime;

class AdminController extends Controller
{
    public function index() {
        $users=User::count();
        $stations=PoliceStation::count();
        $counties=County::count();
        $subcounties=SubCounty::count();
        $wanted=WantedPerson::count();
        $lostpersons=MissingPerson::count();
        $reportedcases=Crime::count();
        session()->flash('active','dashboard');
    	return view('admin.index',compact('stations','counties','subcounties','wanted','lostpersons','reportedcases','users'));
    }


        public function stations() {
  $police_stations=PoliceStation::all();
  session()->flash('active','station');
    	return view('admin.station',compact('police_stations'));
    }

     public function counties() {
  $counties=County::all();
  session()->flash('active','county');
    	return view('admin.counties',compact('counties'));
    }          

    public function subcounties() {
         $subcounties=SubCounty::all();
         session()->flash('active','subcounty');
    	return view('admin.subcounties',compact('subcounties'));
    }

    public function police() {
         $polices=User::where('police_station_id','!=',null)->get();
session()->flash('active','police');
    	return view('admin.police',compact('polices'));
    }

    public function wanted() {

$wanted=WantedPerson::all();
session()->flash('active','wanted');
return view('admin.wanted', compact('wanted'));
    }

    public function missing() {

    $MissingPersons=MissingPerson::all();
    session()->flash('active','missing');
    return view('admin.missing', compact('MissingPersons'));
    }

    public function AddStation(Request $request){

        $request->validate([
    'name'=>'required|min:2',
    'subcounty'=>'required',
    'area'=>'required|min:2'
        ]);


   PoliceStation::create([
'name'=>$request->name,
'sub_county_id'=>$request->subcounty,
'area'=>$request->area
   ]);

session()->flash('success','Station created Successful!');
return redirect()->back();
    }

    public function addCounty(Request $request){
$request->validate([
'name'=>'required'
]);

County::create([
'county'=>$request->name
]);
session()->flash('success','County created Successful!');
return redirect()->back();
    }


    public function AddSubCounty(Request $request) {
        $request->validate([
  'name'=>'required',
  'county'=>'required'
        ]);


        SubCounty::create([
            'name'=>$request->name,
            'county_id'=>$request->county
        ]);


      session()->flash('success','County created Successful!');
return redirect()->back();  
    }



    public function newPoliceOfficer() {
        session()->flash('active','police');
        return view('admin.pages.add_police_officer');
    }


    public function AddPoliceOfficer(Request $request) {
$request->validate([
'name'=>'required',
'idnumber'=>'required',
'phone'=>'required',
'station'=>'required',
'email'=>'required|unique:users',
'police_number'=>'required'
]);

User::create([
'name'=>$request->name,
 'idnumber'=>$request->idnumber,
 'phone'=>$request->phone,
 'police_number'=>$request->police_number,
 'police_station_id'=>$request->station,
 'email'=>$request->email,
 'password' => bcrypt($request->idnumber)
        ]);


session()->flash('success','Police Created SuccessFully');
session()->flash('active','police');
return redirect()->back();


    }


public function  EditStation(PoliceStation $station){
session()->flash('active','station');
return view('admin.edit.station',compact('station'));
}

public function  UpdateStation(Request $request, PoliceStation $station){

$request->validate([
'name'=>'required',
'area'=>'required'
]);

$station->update([
'name'=>$request->name,
'sub_county_id'=>$request->subcounty,
'area'=>$request->area
]);

session()->flash('success',"Subcounty updated successfully");
session()->flash('active','subcounty');
return redirect()->back();
}

public function  UpdateCounty(Request $request, County $county){

$request->validate([
'name'=>'required',

]);

$county->update([
'county'=>$request->name,

]);

session()->flash('success',"county updated successfully");
session()->flash('active','county');
return redirect()->back();
}

public function  EditPolice(User $police){
    session()->flash('active','police');
return view('admin.edit.police',compact('police'));
}

public function  EditSubCounty(SubCounty $subcounty){
    session()->flash('active','subcounty');
return view('admin.edit.subcounty',compact('subcounty'));
}
public function  EditCounty(County $county){
    session()->flash('active','county');
return view('admin.edit.county',compact('county'));
}

public function UpdateSubCounty(Request $request, SubCounty $subcounty)
{
$request->validate([
'name'=>'required',
'county'=>'required'
]);

$subcounty->update([
'name'=>$request->name,
'county_id'=>$request->county

]);

session()->flash('success',"subcounty updated successfully");
session()->flash('active','subcounty');
return redirect()->back();
}


public function UpdatePolice(Request $request , User $police) {
  $request->validate([
'name'=>'required',
'idnumber'=>'required',
'phone'=>'required',
'station'=>'required',
'email'=>'required',
'police_number'=>'required'
]);

$police->update([
'name'=>$request->name,
 'idnumber'=>$request->idnumber,
 'phone'=>$request->phone,
 'police_number'=>$request->police_number,
 'police_station_id'=>$request->station,
 'email'=>$request->email,
 'password' => bcrypt($request->idnumber)
        ]);


session()->flash('success','Police updated SuccessFully');
session()->flash('active','police');
return redirect()->back();
  
}


public function DeleteStation(PoliceStation $station) {

$station->delete();
session()->flash('success','successfully deleted station');

return redirect()->back();
}

public function DeletePolice(User $police) {

$police->delete();
session()->flash('success','successfully deleted station');

return redirect()->back();
}


public function DeleteSubCounty(SubCounty $subcounty) {

$subcounty->delete();
session()->flash('success','successfully deleted station');

return redirect()->back();
}



public function RemoveCounty(County $county) {

$county->delete();
session()->flash('success','successfully deleted station');

return redirect()->back();
}

public function ViewWanted(WantedPerson $wanted){

return view('admin.view.wanted',compact('wanted'));
 }

 public function ViewMissing(MissingPerson $missing){
    return view('admin.view.missing',compact('missing'));
 }


public function RemoveMissing(MissingPerson $missing) {

$missing->delete();
session()->flash('success','successfully deleted lost person!');

return redirect()->back();
}

public function RemoveWanted(WantedPerson $wanted) {

$wanted->delete();
session()->flash('success','successfully deleted wanted criminal!!');

return redirect()->back();
}
}

