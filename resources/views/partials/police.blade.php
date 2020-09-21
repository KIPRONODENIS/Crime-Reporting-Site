@extends('layouts.police')
@section('policeContent')



                <div class="card-body">
                   @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
                  @endif
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
<td class="m-3 p-3 w-3/4"><span class="badge {{$crime->status=='Pending'?'badge-info':$crime->status=='Under Investigation'?'badge-primary':'badge-danger'}} text-md p-2">{{$crime->status}}<span></td>
                     <td class="d-flex">
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-success" data-toggle="modal" data-target="#update_status">Update</i></a>
                            

<!-- Modal -->
<div class='modal fade' id='update_status' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title  py-2 font-bold text-black text-center text-md  tracking-widest uppercase' id='exampleModalLabel'>Update status</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
           <div class='bg-white rounded shadow w-2/3 mx-auto'>


                <form class='bg-grey-lightest px-10 py-10' method='post' action="{{route('police.update.crime',$crime->id)}}">
                    {{ csrf_field() }}
                      @method('put')
                    <div class='mb-3'>
                      <label>Update status.</label>
                     <select name="status" class="form-control">
                      <option value="Pending">Pending</option>
                       <option value="Under Investigation">Under Investigation</option>
                             <option value="closed">closed</option>
                     </select>
                        @error('status')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='flex'>
                        <button type='submit' class='bg-blue-700 hover:bg-teal-800 w-full p-2 text-sm text-white uppercase font-bold tracking-wider'>
                         Update
                        </button>
                    </div>
                </form>

            </div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>

      </div>
    </div>
  </div>
</div>
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

<td class="m-3 p-3 w-3/4"><span class="badge {{$wantedcase->status=='pending'?'badge-info':$wantedcase->status=='Under Investigation'?'badge-info':'badge-success'}} text-md p-2">{{$wantedcase->status}}<span></td>
                     <td class="d-flex">
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-success" data-toggle="modal" data-target="#update_status{{$wantedcase->id}}">Update</i></a>
                            

<!-- Modal -->
<div class='modal fade' id='update_status{{$wantedcase->id}}' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title  py-2 font-bold text-black text-center text-md  tracking-widest uppercase' id='exampleModalLabel'>Update status</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
           <div class='bg-white rounded shadow w-2/3 mx-auto'>


                <form class='bg-grey-lightest px-10 py-10' method='post' action="{{route('police.update.wanted',$wantedcase->id)}}">
                    {{ csrf_field() }}
                      @method('put')
                    <div class='mb-3'>

                      @php 

                 $statuses=['pending','Arrested','Under Investigation']
                        @endphp
                      <label>Update status.</label>
                     <select name="status" class="form-control">
                      @foreach($statuses as $status)
                      <option value="{{$status}}" @if($status==$wantedcase->status) 'selected' @endif>{{$status}}</option>
                      @endforeach

                     </select>
                        @error('status')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='flex'>
                        <button type='submit' class='bg-blue-700 hover:bg-teal-800 w-full p-2 text-sm text-white uppercase font-bold tracking-wider'>
                         Update
                        </button>
                    </div>
                </form>

            </div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>

      </div>
    </div>
  </div>
</div>
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

<td class="m-3 p-3 w-3/4"><span class="badge {{$missingcase->status=='pending'?'badge-info':$missingcase->status=='Found'?'badge-success':'badge-danger'}} text-md p-2">{{$missingcase->status}}<span></td>
                     <td class="d-flex">
     <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-success" data-toggle="modal" data-target="#update_statusm{{$missingcase->id}}">Update</i></a>
                            

<!-- Modal -->
<div class='modal fade' id='update_statusm{{$missingcase->id}}' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title  py-2 font-bold text-black text-center text-md  tracking-widest uppercase' id='exampleModalLabel'>Update status</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
           <div class='bg-white rounded shadow w-2/3 mx-auto'>


                <form class='bg-grey-lightest px-10 py-10' method='post' action="{{route('police.update.missing',$missingcase->id)}}">
                    {{ csrf_field() }}
                      @method('put')
                    <div class='mb-3'>

                      @php 

                 $statuses=['pending','Found','Not Found']
                        @endphp
                      <label>Update status.</label>
                     <select name="status" class="form-control">
                      @foreach($statuses as $status)
                      <option value="{{$status}}" @if($status==$wantedcase->status) 'selected' @endif>{{$status}}</option>
                      @endforeach

                     </select>
                        @error('status')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='flex'>
                        <button type='submit' class='bg-blue-700 hover:bg-teal-800 w-full p-2 text-sm text-white uppercase font-bold tracking-wider'>
                         Update
                        </button>
                    </div>
                </form>

            </div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>

      </div>
    </div>
  </div>
</div>
                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
</tr>
@endforeach
</tbody>
</table>
</div>


                </div>



@endsection

