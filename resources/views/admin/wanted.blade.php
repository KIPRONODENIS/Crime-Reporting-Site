@extends('layouts.admin')

@section('content')
   <div class="container m-4">
        @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
    @endif
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Wanted Criminals <b> Details</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Crime</th>
                        <th>Image</th>
                        <th>Reward</th>
                        <th>Posted By</th>
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
                        <td>{{$person->station->name}}</td>
                        <td>
                         <a class="add" title="Add" data-toggle="tooltip" href="{{route('admin.wanted.view',$person->id)}}"><i class="btn btn-success">view</i></a>
                                <a class="delete" title="delete" data-toggle="tooltip"  href="{{route('wanted.delete',$person->id)}}"><i class="btn btn-danger">Delete</i></a>
                       <!--      <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  

@endsection