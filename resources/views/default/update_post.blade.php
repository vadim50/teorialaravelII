@extends('default.layouts.layout')

@section('content')
	
	<div class="col-md-9">
		<div class="">
			<h2>Редактирование материала</h2>
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


<form method="post" action="{{ route('admin_update_post_p') }}">
	@csrf
<input type="hidden" name="id" value="{{ $article->id}}">
<div class="form-group">
	<label for="name">Заголовок</label>
	<input type="text" name="name" class="form-control" id="name" value="{{ $article->name }}">
</div>

<div class="form-group">
	<label for="img">Изображение</label>
	<input type="text" name="img" class="form-control" id="img" value="{{ $article->img }}">
</div>

<div class="form-group">
	<label for="text">TExt</label>
	<textarea class="form-control" id="text" name="text" rows="3">{{ $article->text }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Update...</button>

</form>

@endsection
</div>