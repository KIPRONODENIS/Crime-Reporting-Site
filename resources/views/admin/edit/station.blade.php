@extends('layouts.admin')

@section('content')
<div class="jumbotron bg-white">
<div class="w-50 shadow">
    
<!-- Modal -->

           <div class='bg-white rounded shadow-sm w-2/3 mx-auto'>
  <h4 class="font-bold tracking-wider m-2 p-2">Edit Police Station</h4>
  @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
  @endif
                <form class='bg-grey-lightest px-3 py-3' method='post' action="{{route('station.update',$station->id)}}">
                    @method('put')
                    {{ csrf_field() }}
                    
                    <div class='form-group mb-3'>
                      <label> Name.</label>
                        <input class='border w-full p-2 form-control m-2' name='name' type='text'  value='{{$station->name}}' required>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='form-group mb-3'>
                      <label> Subcounty.</label>
                        <select class='border w-full p-2 form-control m-2' name='subcounty' type='text'  value='' required>
                          @php 
$subcounties=\App\SubCounty::all();

                          @endphp

                          @foreach($subcounties as $subc)

<option value="{{$subc->id}}"  @if($station->subcounty_id==$subc->id) {{'selected'}} @endif>{{$subc->name}}</option>

                          @endforeach
                        </select>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='form-group mb-3'>
                      <label> Area.</label>
                        <input class='border w-full p-2 form-control m-2' name='area' type='text'  value='{{$station->area}}'  required>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='mb-3'>
                        <button type='submit' class='btn btn-primary shadow'>
                           Submit
                        </button>
                    </div>
                </form>

            </div>

</div>
</div>
</div>
@endsection
   