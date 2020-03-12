<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $crimes=\Auth::user()->crimes()->with('station')->get();

       if(\Auth::user()->hasRole('police')) {
         $crimes=\Auth::user()->station()->with('crimes')->get()->first()->crimes;

         $wantedcases=\Auth::user()->station->wantedcases;
         $missingcases=\Auth::user()->station->missingcases;


         return view('partials.police',compact('crimes','wantedcases','missingcases'));
       }

           if(\Auth::user()->hasRole('admin')) {

       return redirect()->route('admin.home');
       }

       
        return view('home',compact('crimes'));
    }


    public function wanted(){

    $wanted=\Auth::user()->station->wanted;
   return view('police.wanted',compact('wanted'));
    } 

       public function missing(){

    $MissingPersons=\Auth::user()->station->missing;
   return view('police.missing',compact('MissingPersons'));
    }


}
