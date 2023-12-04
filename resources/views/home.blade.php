
@extends('layout.master')
@section('title', 'Home')

@section('content')

<h1 class="text-center"> This is Home Page</h1>
<hr>


@include('component.portfolio')

@include('component.team')



@endsection