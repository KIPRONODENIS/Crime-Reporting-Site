@extends('layouts.admin')

@section('content')
<div class="jumbotron bg-white w-75 mx-auto">

                <form class='bg-grey-lightest px-3 py-3' method='post' action="{{route('county.update',$county->id)}}">
                	@method('put')
                	  @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>
  @endif
                    {{ csrf_field() }}
                    
                    <div class='form-group mb-3'>
                      <label> Name.</label>
                        <input class='border w-full p-2 form-control m-2' name='name' type='text'  value='{{$county->county}}' required>
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