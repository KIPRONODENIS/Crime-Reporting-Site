@extends('layouts.app')

@section('content')

<div class="h-screen">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="row">
				<div class="col-4">
					<img src="{{asset('storage/'.$person->image)}}" height="400" width="400">
				</div>
				<div class="col-2"></div>
				<div class="col-4 mt-4">
					<h4 class="card h3 font-bold m-2 p-3">Name: {{$person->name}}</h4>
					<h4 class=" card h3 font-bold m-2 p-3">Location: {{$person->location}}</h4>
					<h4 class=" card h3 bolder text-success m-2 p-3">Got Lost:{{$person->time->diffForHumans()}}</h4>
				</div>
			</div>

			<div class="row">
				<h1 class="h3 text-danger my-3">More About This Person</h1>
				<p class="lead">{{$person->description}}</p>
			</div>
		</div>
	</div>

</div>
@endsection