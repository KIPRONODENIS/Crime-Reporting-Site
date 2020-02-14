@extends('layouts.app')

@section('content')
@role('police')
@include('partials.police')
@else

@include('partials.user');
@endrole

@endsection
