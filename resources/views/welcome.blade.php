@extends('layouts.app')

@section('content')
<div class="h-screen w-full bg-white">
<div class=" w-full  bg-gray-100 opacity-75 flex flex-column jusfify-center pt-10" >

<div class="jumbotron w-3/4 mx-auto text-center">
  <div class="h-10"></div>
<h1 class="display-4 text-blue-900 mx-auto"> Do yo want a Report A Crime ?</h1>
<p class="h4 text-primary mx-auto my-3">Lets the police know about you case now!!</p>

<a  href="/report" class=" mx-auto w-1/2 btn btn-success py-3 shadow text-md opacity-100 ">Report Now!!</a>
</div>
</div>
</div>
@endsection
