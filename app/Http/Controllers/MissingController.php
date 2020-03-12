<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MissingPerson;
class MissingController extends Controller
{
      public function show(MissingPerson $person) {
   
   return view('missing.details',compact('person'));
    }

    public function report(MissingPerson $person) {
    	$type="missing";
   return view('missing.report',compact('person','type'));
    }


    
}
