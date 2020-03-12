@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Dashboard
 <div class="d-flex jusfify-around">
   <a href="{{route('home')}}" class="bg-white text-gray-700  rounded shadow hover:bg-transparent  focus:bg-gray-100 py-3 m-2 no-underline nav-link">Dashboard</a> 

   <a href="{{route('police.wanted')}}" class="bg-white text-gray-700  rounded shadow hover:bg-transparent  focus:bg-gray-100 py-3 m-2 no-underline nav-link">Wanted Persons</a> 

     <a href="{{route('police.missing')}}" class="bg-white text-gray-700  rounded shadow hover:bg-transparent  focus:bg-gray-100 py-3 m-2 no-underline nav-link">Missing Persons</a>

   <a href="{{url('/profile')}}" class="bg-blue-200 text-gray-700 rounded shadow hover:bg-transparent  focus:bg-gray-100 py-3 m-2 no-underline nav-link">Profile</a>
 </div>


                </div>

                

                @yield('policeContent')
            </div>


                
        </div>
    </div>
</div>
@endsection
