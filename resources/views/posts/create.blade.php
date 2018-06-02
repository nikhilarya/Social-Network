@extends('layouts.master')

@section('content')
	<h1>Create a post</h1>
	{!! Form::open(['url' => '/posts', 'method' => 'post']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null , ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Publish', ['class' => 'btn btn-primary']) !!}

		@include('layouts.errors')
	{!! Form::close() !!}


@endsection