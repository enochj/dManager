@extends('layouts.app')

@section('content')

	<!-- Bootstrap Boilerplate -->
	
	<div class="panel-body">
		<!-- Display Validation Errors -->
		@include('common.errors')
		
		<!-- New Card Form -->
		<form action="{{ url('card') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}
			
			<!-- Card Name -->
			<div class="form-group">
				<label for="card" class="col-sm-3 control-label">Card</label>
				
				<div class="col-sm-6">
					<input type="text" name="name" id="card-name" class="form-control">
				</div>
			</div>
			
			<!-- Add Card Button -->
			<div class="form-group">
				<div class="col-sm-offest-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Add Card
					</button>
				</div>
			</div>
		</form>
	</div>
	
	
	<!-- TODO: Current Tasks -->
@endsection
		
			