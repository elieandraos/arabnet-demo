@extends('app');


@section('content')
	<div class="container">
		<h1>Create News</h1>
		
		{!! Form::open(['url' => 'news/store']) !!}
			<div class="form-group">
				{!! Form::label('title', 'Title') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('description', 'Description:') !!}
				{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>
			
			{!! Form::submit('Add News', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
		</div>
	</div>
@stop