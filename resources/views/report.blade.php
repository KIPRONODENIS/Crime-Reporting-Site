@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
<div class="col-md-10 mx-auto">
 <div class="card mt-5">
 <div class="card-header">
   <h1 class="h4 uppercase shadow border-b mb-4 p-3 text-gray-700">Report A case</h1>


 </div>

 <div class="card-body">
   <form>
     <div class="row">
       <div class="col">
         <label for="inputState">Case Title</label>
         <input type="text" class="form-control" placeholder="e.g accident">
       </div>
       <div class="col">
         <label for="inputState">Police Station</label>
           <select id="inputState" class="form-control">
             <option selected>Choose...</option>
             <option>...</option>
           </select>
       </div>
     </div>
     <div class="h-10"></div>
     <div class="row mt-5">
       <div class="col">
         <label for="inputState">County</label>
           <select id="inputState" class="form-control">
             <option selected>Choose...</option>
             <option>...</option>
           </select>
       </div>
       <div class="col">
         <label for="inputState">Subcounty</label>
           <select id="inputState" class="form-control">
             <option selected>Choose...</option>
             <option>...</option>
           </select>
       </div>
       <div class="col">
         <label for="inputState">Area</label>
           <input class="form-control" name="area">
       </div>
     </div>

     <div class="row mt-5">
   <div class=" col w-1/2">
     <label>Briefly Describe the Incident?</label>
   <textarea class="form-control"></textarea>
   </div>

 </div>
  <button class="btn btn-primary w-1/4 mt-5 p-2 float-right">submit</button>
   </form>
 </div>
   <div>
</div>
  </div>

</div>
@endsection
