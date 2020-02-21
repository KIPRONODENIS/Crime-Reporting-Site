@extends('layouts.app')

@section('content')
<div class="h-screen w-full bg-white">
<div class=" w-full  bg-gray-100 opacity-75 flex flex-column jusfify-center pt-10" >

<div class="jumbotron w-3/4 mx-auto text-center">
  <div class="h-10"></div>
<h1 class="display-4 text-blue-900 mx-auto"> Do yo want a Report A Crime ?</h1>
<p class="h4 text-primary mx-auto my-3">Lets the police know about you case now!!</p>
<div class="flex w-full mt-5">
<a  href="/report" class=" mx-2 w-1/2 btn btn-success py-3 shadow text-md opacity-100 ">Yes! I want</a>
<a  href="/login" class=" mx-2 w-1/2 btn btn-primary py-3 shadow text-md opacity-100 ">No! I want to Login</a>
</div>
</div>
</div>
</div>
@endsection
