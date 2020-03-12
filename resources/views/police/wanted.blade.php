
@extends('layouts.police')
@section('policeContent')



                <div class="card-body">
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700"> List of Wanted Persons
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right mb-4" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</h1>
 <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Crime</th>
                        <th>Image</th>
                        <th>Reward</th>
                    
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wanted as $person)
                              <tr>
                        <td>{{$person->name}}</td>
                        <td>{{$person->crime}}</td>
                        <td>
                            <img src="{{asset('storage/'.$person->image)}}" class="img-responsive" height="100" width="100">
                        </td>
                        <td>{{$person->reward}}</td>
                       
                        <td>
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-primary">edit</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="btn btn-danger">Delete</i></a>
                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


                </div>




@endsection
