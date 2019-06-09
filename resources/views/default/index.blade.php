@extends('default.layouts.layout')

@section('navbar')
	@parent
@endsection

@section('header')
	@parent
@endsection

@section('sidebar')
<h1>HEllo</h1>
	@parent
<h1>Buy</h1>
@endsection

@section('content')

	@include('default.content')
     
@endsection