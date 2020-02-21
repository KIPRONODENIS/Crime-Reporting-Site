@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard
 <div class="d-flex jusfify-around">
   <a href="/home}}" class="bg-white text-gray-700  rounded shadow hover:bg-transparent  focus:bg-gray-100 py-3 m-2 no-underline nav-link">Dashboard</a>
   <a href="/profile}}" class="bg-blue-200 text-gray-700 rounded shadow hover:bg-transparent  focus:bg-gray-100 py-3 m-2 no-underline nav-link">Profile</a>
 </div>


                </div>

                <div class="card-body">
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700"> Cases Reported to {{$crimes->first()->station->name}}</h1>
<table class="table table-responsive table-striped ">
 <thead class="bg-primary text-white">
<tr>
<td>Title</td>
<td>Type</td>
<td>Police Station</td>
<td>Area</td>
<td>Status</td>
<td>Action</td>
</tr>
 </thead>

 <tbody>
   @foreach($crimes as $crime)
<tr>
<td>{{$crime->title}}</td>
<td>{{$crime->type}}</td>
<td>{{$crime->station->name}}</td>
<td>{{$crime->area}}</td>
<td><span class="badge {{$crime->status=="pending"?'badge-info':'badge-success'}} text-md p-2">{{$crime->status}}<span></td>
<td>Action<span class="fas fa-edit"></span></td>
</tr>
@endforeach
</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
