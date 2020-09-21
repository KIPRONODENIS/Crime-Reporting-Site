
@extends('layouts.police')
@section('policeContent')



                <div class="card-body">
<h1 class="h4 my-2"> Missing Persons
                        <!-- Button trigger modal -->
<a href="{{route('police.missing.create')}}" class="btn btn-primary float-right mb-4" >
  Add New
</a>

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
                        <th>Location</th>
                        <th>Image</th>
                     
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                      @foreach($MissingPersons as $person)
                              <tr>
                        <td>{{$person->name}}</td>
                        <td>{{$person->location}}</td>
                        <td>
                            <img src="{{asset('storage/'.$person->image)}}" class="img-responsive" height="100" width="100">
                        </td>
                          <td>
              <a class="add" title="Add" data-toggle="tooltip"><i class="btn btn-primary">edit</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="btn btn-danger">Delete</i></a> 
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="btn btn-success">view</i></a>
                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                </div>




@endsection
