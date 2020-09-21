@extends('layouts.admin')

@section('content')
<div class="jumbotron bg-white w-75 mx-auto shadow">

                <form class='bg-grey-lightest px-3 py-3' method='post' action="{{route('subcounty.update',$subcounty->id)}}">
                    {{ csrf_field() }}
                    @method('put')
                      @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
  @endif
                    <div class='form-group mb-3'>
                      <label> Name.</label>
                        <input class='border w-full p-2 form-control m-2' name='name' type='text'  value='{{$subcounty->name}}' required>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>

                    <div class='form-group mb-3'>
                      <label> County.</label>
                        <select class='border w-full p-2 form-control m-2' name='county' type='text'  value='' required>
                          @php 
$counties=\App\County::all();

                          @endphp

                          @foreach($counties as $c)

<option value="{{$c->id}}"   @if($subcounty->county_id==$c->id) {{'selected'}} @endif>{{$c->county}}</option>

                          @endforeach
                        </select>
                        @error('name')
                    <p class='text-red-500'>{{$message}}</p>
                        @enderror
                    </div>



                    <div class='mb-3'>
                        <button type='submit' class='btn btn-success shadow'>
                           Update
                        </button>
                    </div>
                </form>
</div>
@endsection
   