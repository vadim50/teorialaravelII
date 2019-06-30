@extends('default.layouts.layout')

@section('content')
	
	<div class="col-md-9">
		<div class="">
			<h2>Добавление нового материала</h2>
		</div>

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if(session('message'))
	<div class="alert alert-success">
		{{  session('message') }}
	</div>
@endif


<form method="post" action="{{ route('admin_add_post_p') }}">
	@csrf

<div class="form-group">
	<label for="name">Заголовок</label>
	<input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
</div>

<div class="form-group">
	<label for="img">Изображение</label>
	<input type="text" name="img" class="form-control" id="img" value="{{ old('img') }}">
</div>

<div class="form-group">
	<label for="text">TExt</label>
	<textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Add...</button>

</form>

@endsection
</div>