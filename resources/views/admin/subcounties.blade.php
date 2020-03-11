@extends('layouts.admin')

@section('content')
   <div class="container m-4">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Sub Counties<b> Details</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
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
                        <td>{{$subcounty->county->county}}</td>
                        <td>{{$subcounty->created_at->diffForHumans()}}</td>
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
    </div>  

@endsection
