@extends('layouts.app')

@section('content')
<header style="background-image: url('{{asset('/images/optimized.jpg')}}'); background-size: cover;">
  <div class="overlay"></div>

   

  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3" style="color:#fc4a1a">Report Crime</h1>

        <p class="lead mb-0">Register to be able to use our platform</p>
        <button class="btn btn-primary btn-lg shadow my-3" >Create an Account</button>
      </div>
    </div>
  </div>
</header>

<section class="mb-5 py-5">
  <div class="container">

    <div class="row bg-gray-200">

      <div class="col-md-10 mx-auto">
                <h1 class="display-4 text-center my-5" style="color:#fc4a1a">Wanted Criminals!!!</h1>
          <p>The following people have been identified a the most wanted criminals and therefore the
          National police service wishes to inform the public to submit their report here should they see any of the following. Rewards will be offered for any who find...</p>
         <div class="h-10"></div>

       <!-- Team -->
<section id="team" class="pb-5 ">
    <section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">

    </div>
    <ul class="row flex flex-wrap justify-around list-unstyled">
@foreach($WantedPersons as $wanted)
      <li class="col-4 px-3 ">
          <div class="cnt-block equal-hight border-red-500 border-1 rounded shadow " >

            <figure><img src="{{asset('storage/'.$wanted->image)}}" class="img-responsive" alt=""></figure>
            <h3 ><a href="http://www.webcoderskull.com/" style="color:#fc4a1a">{{$wanted->name}}</a></h3>
            <p>{{$wanted->crime}}</p>

            <h3 ><a href="#" class="text-green-500 bold">Reward: Kshs. <span class="font-bold text-success">{{$wanted->reward}}</span></a></h3>
            <div class='spacer h-10'></div>
           <div class="mx-3 flex justify-between">
             <a href="{{route('wanted.show',$wanted->id)}}" class="text-blue-500">Details</a>
             <a href="{{route('wanted.report',$wanted->id)}}" class="btn btn-success border border-1 border-solig-red">Report</a>
           </div>
          </div>
      </li>
@endforeach
 

    </ul>
  </div>
</section>
</section>
      </div>
    </div>

        <div class="row mt-5">
      <div class="col-md-8 mx-auto">
      	 <h1 class="display-4" style="color:#fc4a1a">Missing Persons!!!</h1>
        <p>The following persons went missing and are being sought for by their families and friends. The National Police service is therefore urging any one who has seen the person to report of their where abouts here.</p>


      </div>
    </div>
        <div class="row mt-5">
      <div class="col-md-9 mx-auto">

         <ul class="row flex flex-wrap justify-around list-unstyled">
     @foreach($MissingPersons as $person)
      <li class="col-4 px-3 ">
          <div class="cnt-block equal-hight border-red-500 border-1 rounded shadow px-3" >
            <figure><img src="{{asset('storage/'.$person->image)}}" class="img-responsive card-img-top" alt="" ></figure>
            <h3 class="my-2" >NAME: <a href="http://www.webcoderskull.com/" class="uppercase bolder my-2" style="color:#fc4a1a">{{$person->name}}</a></h3>
            <p class="my-2">Comes From:<strong>{{$person->location}}</strong></p>

            <h3 >Got Lost:<a href="http://www.webcoderskull.com/" class="text-green-500 bold">{{$person->time->diffForHumans()}} </a></h3>
            <div class='spacer h-5'></div>
           <div class="mx-3 flex justify-between my-2 mb-5">
             <a href="{{route('missing.show',$person->id)}}" class="text-blue-500">Details</a>
             <a href="{{route('missing.report',$person->id)}}" class="btn btn-success border border-1 border-solig-red mb-2">Report</a>
           </div>
          </div>
      </li>

      @endforeach
 
    </ul>

      </div>
    </div>

  </div>
</section>

@endsection
