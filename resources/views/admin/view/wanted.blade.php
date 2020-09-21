@extends('layouts.admin')

@section('content')

   <div class="container m-4">

<div class="w-75 mx-auto shadow">
  <h4 class="text-center mt-3">Wanted Person Details</h4>
  <hr>
  <div class=" ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Name:</span>
    <span class=" text-danger  p-2 m-2">{{$wanted->name}}</span>
  </div>

    <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Crime:</span>
    <span class=" text-danger    p-2 m-2">{{$wanted->crime}}</span>
  </div>

      <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Posted By:</span>
    <span class=" text-danger    p-2 m-2">{{$wanted->station->name}}</span>
  </div>
        <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Status By:</span>
    <span class=" text-danger    p-2 m-2">{{$wanted->status ?? 'Under Investigation'}}</span>
  </div>
        <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Image</span>
    <span class=" text-danger    p-2 m-2"><img src="{{asset('storage/'.$wanted->image)}}" height="150" width="150"></span>
  </div>

      <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Brief Description:</span>
    <p class=" text-black    px-3 m-2 ml-3">"{{$wanted->description}}"</p>
  </div>

</div>

    </div>  

@endsection
