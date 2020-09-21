
@extends('layouts.police')
@section('policeContent')



                <div class="card-body">
<h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700"> List of Wanted Persons
                        <!-- Button trigger modal -->
<a href="{{route('police.wanted.create')}}" class="btn btn-primary float-right mb-4" >
  Add New
</a>





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
