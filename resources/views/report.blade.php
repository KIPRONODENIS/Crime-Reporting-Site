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
  @livewire('report')
 </div>
   <div>
</div>
  </div>

</div>
<script>
@livewireScripts
</script>
@endsection
