@extends('default.layouts.layout')

@section('content')
	<div class="col-md-9">
		<?php echo $_SERVER['SERVER_SOFTWARE'] ?>
		<pre>
			{{ print_r(Session::all()) }}
		</pre>
		
		<div>
			<h2>{{ $title }}</h2>
	
		</div>
		<p>
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
		</p>
		@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form method="post" action="{{ route('contacts') }}">
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
			</div>
			
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="text">Site</label>
				<input type="text" id="site" class="form-control" name="site" value="{{ old('site') }}" placeholder="Site">
			</div>
			<div class="form-group">
				<label for="text">Text</label>
				<textarea class="form-control" id="text" rows="3" name="text">{{ old('text') }}</textarea>

			</div>
				

			<button style="margin-top:30px;" type="submit" class="btn btn-primary">Submit...</button>
		</form>
	</div>
@endsection