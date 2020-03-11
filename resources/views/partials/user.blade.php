<div class="container " style="height:100% !important">
    <div class="row justify-content-center">
        <div class="col-md-11 ">
            <div class="card w-full">
                <div class="card-header">Dashboard


<div class="float-right">
  <a href="{{route('report')}}" class="btn btn-danger text-white">Report A crime</a>
</div>

                </div>

                <div class="card-body  " >
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700">Your Reported Cases</h1>
<table class="table table-responsive table-striped w-full  ">
 <thead class="bg-primary text-white">
<tr>
<td class="w-1/4">Title</td>
<td class="w-1/4">Type</td>
<td class="w-1/4">Police Station</td>
<td class="w-1/4">Area</td>
<td class="w-1/4">Status</td>
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

</tr>
@endforeach
</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
