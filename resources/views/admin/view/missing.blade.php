@extends('layouts.admin')

@section('content')

   <div class="container m-4">

<div class="w-75 mx-auto shadow">
  <h4 class="text-center mt-3">Missing Person Details</h4>
  <hr>
  <div class=" ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Name:</span>
    <span class=" text-danger  p-2 m-2">{{$missing->name}}</span>
  </div>

    <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Residence:</span>
    <span class=" text-danger    p-2 m-2">{{$missing->location}}</span>
  </div>
      <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Lost Since:</span>
    <span class=" text-danger    p-2 m-2">{{$missing->date_lost}}</span>
  </div>

      <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Posted By:</span>
    <span class=" text-danger    p-2 m-2">{{$missing->station->name}}</span>
  </div>
        <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Status By:</span>
    <span class=" text-danger    p-2 m-2">{{$missing->status ?? 'Under Investigation'}}</span>
  </div>
        <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Image</span>
    <span class=" text-danger    p-2 m-2"><img src="{{asset('storage/'.$missing->image)}}" height="150" width="150"></span>
  </div>

      <div class="mt-4 ">
    <span class="font-bold tracking-wider h5 font-bold p-3 m-3">Brief Description:</span>
    <p class=" text-black    px-3 m-2 ml-3">"{{$missing->description}}"</p>
  </div>

</div>

    </div>  

@endsection
