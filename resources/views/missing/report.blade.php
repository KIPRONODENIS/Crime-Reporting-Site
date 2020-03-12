@extends('layouts.app')

@section('content')

<div class="jumbotron">
	
	<div class="row"> 
   <div class="col-md-8 mx-auto">
   	<div class="form d-flex ">
   		<div class="image-thumbnail mx-4">
   		
        <img src="{{asset('storage/'.$person->image)}}" height="350" width="300">
   		 </div>

   		 <div class="w-100 ml-4">
   		 		<h4 class="h4 shadow bg-danger card p-3 text-white">Report where Abouts Of This Person</h4>
   		 	<form action="{{route('wanted.store')}}" method="post">
   		 		@if(session()->has('success')) 

                    <div class="alert alert-success">{{session('success')}}</div>
   		 		@endif
   		 		@csrf
   		 		<div class="form-group">
   		 			
   		 			<label></label>
   		 			<input type="hidden" name="id" value="{{$person->id}}">
   		 					<input type="hidden" name="type" value="{{$type}}">

   		 			<input type="hidden" name="police_station_id" value="{{$person->station->id}}">



         
      
   		 		</div>
   		 		<div class="form-group">
   		 			
   		 			<label>Where Did You Saw the Victim?</label>
   		 			<input type="text" name="location" class="form-control" value="{{old('location')}}" required="">
   		 		</div>

   		 		   		<div class="form-group">
   		 			
   		 			<label>Brief Description ?</label>
   		 			<textarea name="description" class="form-control" required>{{old('description')}}</textarea>

   		 			@error('description')

       <p class="alert alert-danger">{{$message}}</p>
   		 			@enderror
   		 		</div>

   		 		<div class="form-group">
   		 			<button type="submit" class="btn btn-primary">Submit</button>
   		 		</div>
   		 	</form>
   		 </div>
   	</div>
   </div>
	</div>
</div>
@endsection