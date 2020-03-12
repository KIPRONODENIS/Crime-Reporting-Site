@extends('layouts.police')
@section('policeContent')



                <div class="card-body">
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700"> Cases Reported to {{$crimes->first()->station->name}}</h1>
<div class="w-100 card">
 <table class="table table-responsive table-striped w-100">
 <thead class="bg-primary text-white">
<tr>
<th>Title</th>
<th>Type</th>
<th>Police Station</th>
<th>Area</th>
<th>Status</th>
<th>Action</th>
</tr>
 </thead>

 <tbody>
   @foreach($crimes as $crime)
<tr>
<td class="m-3 p-3 w-50">{{$crime->title}}</td>
<td class="m-3 p-3 w-25" >{{$crime->type}}</td>
<td class="m-3 p-3 w-50">{{$crime->station->name}}</td>
<td class="m-3 p-3 w-25">{{$crime->area}}</td>
<td class="m-3 p-3 w-3/4"><span class="badge {{$crime->status=="pending"?'badge-info':'badge-success'}} text-md p-2">{{$crime->status}}<span></td>
                     <td class="d-flex">
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-primary">Update</i></a>
                            

                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
</tr>
@endforeach
</tbody>
</table>
</div>


                </div>




<div class="card-body">
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700">  Reported cases of Wanted Criminals </h1>
<div class="w-100 card">
 <table class="table table-responsive table-striped w-100">
 <thead class="bg-primary text-white">
<tr>
<th>Name of Victim</th>

<th> Crime</th>
<th>Reported By</th>
<th>Location</th>
<th>Status</th>
<th>Action</th>
</tr>
 </thead>

 <tbody>
   @foreach($wantedcases as $wantedcase)
<tr>
<td class="m-3 p-3 w-50">{{$wantedcase->person->name}}</td>
<td class="m-3 p-3 w-50">{{$wantedcase->person->crime}}</td>
<td class="m-3 p-3 w-25" >{{$wantedcase->reporter->name}}</td>
<td class="m-3 p-3 w-50">{{$wantedcase->location}}</td>

<td class="m-3 p-3 w-3/4"><span class="badge {{$wantedcase->status=="pending"?'badge-info':'badge-success'}} text-md p-2">{{$wantedcase->status}}<span></td>
                     <td class="d-flex">
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-success">Update</i></a>
                            

                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
</tr>
@endforeach
</tbody>
</table>
</div>


                </div>




<div class="card-body">
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700">  Reported cases of Missing People </h1>
<div class="w-100 card">
 <table class="table table-responsive table-striped w-100">
 <thead class="bg-primary text-white">
<tr>
<th>Name of Victim</th>

<th> Residence</th>
<th>Reported By</th>
<th>Location</th>
<th>Status</th>
<th>Action</th>
</tr>
 </thead>

 <tbody>
   @foreach($missingcases as $missingcase)
<tr>
<td class="m-3 p-3 w-50">{{$missingcase->person->name}}</td>
<td class="m-3 p-3 w-25">{{$missingcase->person->location}}</td>
<td class="m-3 p-3 w-25" >{{$missingcase->reporter->name}}</td>
<td class="m-3 p-3 w-50">{{$missingcase->location}}</td>

<td class="m-3 p-3 w-3/4"><span class="badge {{$missingcase->status=="pending"?'badge-info':'badge-success'}} text-md p-2">{{$missingcase->status}}<span></td>
                     <td class="d-flex">
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-success">Update</i></a>
                            

                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
</tr>
@endforeach
</tbody>
</table>
</div>


                </div>



@endsection

