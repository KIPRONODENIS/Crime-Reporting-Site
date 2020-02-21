<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\User;
class UserController extends Controller
{
  /**
   * contact  the specified user
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function contact(Service $service)
  {
      return view('User.contact');
  }
  /**
   * RETURN  user profile view
   *
   * @param  \App\Models\services  id
   * @return \Illuminate\Http\Response
   */
  public function profile() {
    return view('profile');
  }
}
