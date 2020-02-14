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
    
         return view('partials.police',compact('crimes'));
       }
        return view('home',compact('crimes'));
    }
}
