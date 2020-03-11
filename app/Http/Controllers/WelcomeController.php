<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WantedPerson;
use App\MissingPerson;
class WelcomeController extends Controller
{
    public function index() {

  $MissingPersons=MissingPerson::get()->take(6);
  $WantedPersons=WantedPerson::get()->take(6);

 return view('welcome',compact('MissingPersons','WantedPersons'));
    }
}
