@extends('layouts.admin')

@section('content')
   <div class="container m-4 w-75 mx-auto">

    @if(session()->has('success'))
<div class="alert alert-success">{{session('success')}}</div>

    @endif
       <div class="w-1/2 shadow mx-auto">
         <h4 class="font-bold tracking-wider m-2">Register An Officer</h4>
         <hr>
                             <form method="POST" action="{{ route('police.add') }}" class="p-2">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Police Number') }}</label>

                            <div class="col-md-6">
                                <input id="police_number" type="text" class="form-control @error('police_number') is-invalid @enderror" name="police_number" value="{{ old('police_number') }}" required autocomplete="police_number" autofocus>

                                @error('police_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Police Station') }}</label>

                            <div class="col-md-6">
                                <select id="station" type="text" class="form-control @error('station') is-invalid @enderror" name="station" value="{{ old('station') }}" required autocomplete="station" autofocus>
                                    @php

          $stations=\App\PoliceStation::all();
                                     @endphp
                                     @foreach($stations as $station)
                                    <option value="{{$station->id}}">{{$station->name}}</option>
                                    @endforeach
                                </select>

                                @error('station')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="07xxxxxx"  autocomplete="phone" required pattern='^0\d{9}'>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>

                            <div class="col-md-6">
                                <input id="idnumber" type="idnumber" class="form-control @error('idnumber') is-invalid @enderror" name="idnumber" required autocomplete="new-idnumber">

                                @error('idnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  <p class="text-muted">*ID Number will be the default password.*</p>
                            </div>

                        </div>



                        <div class="form-group row m-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
       </div>
    </div>  

@endsection
