@extends('layouts.app')

@section('content')

<div class="jumbotron">
	
	<div class="row"> 
   <div class="col-md-6 mx-auto">
 <form class="bg-white shadow p-4" action="{{route('police.missing.store')}}" method="post" enctype="multipart/form-data">
  @csrf
    @if(session()->has('success'))

<div class="alert alert-success">{{session('success')}} </div>
  @endif
<h4 class="h4 font-bold tracking-wider">Add Lost Person!</h4>
<hr>

    <div class="form-group">
      <label>Enter Name.</label>
          <input type="text" name="name" class="form-control" required>
          @error('name')
<p class="text-red-500">{{$message}}</p>
          @enderror
    </div>
 


         <div class="form-group">
      <label>Location.</label>
          <input type="text" name="location" class="form-control" required>
          @error('location')
<p class="text-red-500">{{$message}}</p>
          @enderror
    </div>

       <div class="form-group">
      <label>Date Lost.</label>
          <input type="date" name="date_lost" class="form-control" required>
          @error('date_lost')
<p class="text-red-500">{{$message}}</p>
          @enderror
    </div>

           <div class="form-group">
      <label>Person's Image</label>
          <input type="file" name="image" class="form-control" required>
          @error('image')
<p class="text-red-500">{{$message}}</p>
          @enderror
    </div>

               <div class="form-group">
      <label>Brief Description</label>
          <textarea name="description" class="form-control" >
             
          </textarea>
          @error('description')
<p class="text-red-500">{{$message}}</p>
          @enderror
    </div>


               <div class="form-group">
     <button type="submit" class="btn btn-success">Submit</button>
    </div>
 </form>
   </div>
	</div>
</div>
@endsection