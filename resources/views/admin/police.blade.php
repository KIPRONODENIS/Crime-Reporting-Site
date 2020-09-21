@extends('layouts.admin')

@section('content')
   <div class="container m-4">

    @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
    @endif
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Police Officers <b> Details</b></h2></div>
                    <div class="col-sm-4">
                        <a href="{{route('police.new')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Station</th>
                        <th>Phone</th>
                        <th>ID Number</th>
                        <th>Police Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($polices as $police)
                   <tr>
                        <td>{{$police->name}}</td>
                        <td>{{$police->email}}</td>
                        <td>{{$police->station->name}}</td>
                        <td>{{$police->phone}}</td>
                        <td>{{$police->idnumber}}</td>
                        <td>{{$police->police_number}}</td>
                        <td>
              <a class="add" href="{{route('edit.police',$police->id)}}"  title="Add" data-toggle="tooltip"><i class="btn btn-primary" >edit</i></a>
                              <a class="delete" title="delete" data-toggle="tooltip"  href="{{route('police.delete',$police->id)}}"><i class="btn btn-danger">Delete</i></a>

                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  

@endsection