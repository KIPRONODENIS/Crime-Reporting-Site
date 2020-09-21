@extends('layouts.admin')

@section('content')
   <div class="container m-4">

    @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
    @endif
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Sub Counties<b> Details</b></h2></div>
                    <div class="col-sm-4">
                                     <button type="button" class="btn btn-info add-new" data-toggle="modal" data-target="#add_subcounty"><i class="fa fa-plus"></i> Add New</button>

                                     <!-- Modal -->
<div class='modal fade' id='add_subcounty' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title  py-2 font-bold text-black text-center text-md  tracking-widest uppercase' id='exampleModalLabel'>Add County</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
           <div class='bg-white rounded shadow w-2/3 mx-auto'>


                <form class='bg-grey-lightest px-3 py-3' method='post' action="{{route('subcounty.add')}}">
                    {{ csrf_field() }}
                    
                    <div class='form-group mb-3'>
                      <label> Name.</label>
                        <input class='border w-full p-2 form-control m-2' name='name' type='text'  value='' required>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='form-group mb-3'>
                      <label> County.</label>
                        <select class='border w-full p-2 form-control m-2' name='county' type='text'  value='' required>
                          @php 
$counties=\App\County::all();

                          @endphp

                          @foreach($counties as $c)

<option value="{{$c->id}}">{{$c->county}}</option>

                          @endforeach
                        </select>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>



                    <div class='mb-3'>
                        <button type='submit' class='btn btn-primary shadow'>
                           Submit
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
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>County</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
     @foreach($subcounties as $subcounty)

                    <tr>
                        <td>{{$subcounty->name}}</td>
                        <td>{{$subcounty->county->county ?? ''}}</td>
                        <td>{{$subcounty->created_at->diffForHumans()}}</td>
                       <td>
              <a class="add"  href="{{route('edit.subcounty',$subcounty->id)}}" title="Add" data-toggle="tooltip"><i class="btn btn-primary">edit</i></a>
               <a class="delete" title="delete" data-toggle="tooltip"  href="{{route('subcounty.delete',$subcounty->id)}}"><i class="btn btn-danger">Delete</i></a>
                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
                    </tr>
     @endforeach
                </tbody>
            </table>
        </div>
    </div>  

@endsection
