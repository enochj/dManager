@extends('layouts.app')

@section('content')

	<!-- Bootstrap Boilerplate -->
	
	<div class="panel-body">
		<!-- Display Validation Errors -->
		@include('common.errors')
		
		<!-- New Card Form -->
		<form action="/card" method="POST" class="form-horizontal">
			{{ csrf_field() }}
		
			