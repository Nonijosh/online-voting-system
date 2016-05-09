@extends ('main')

@section('title', 'Create New Candidate')

@section('content')

	<div class="row ">
		<div class="col-md-8 col-md-offset-2 jumbotron">
			<h3><b><i>Please ensure that all candidates to be registered meet the following requirements</i></b></h3>
			<hr>
			<ol>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus placeat autem natus nisi laborum at illum eos molestiae aperiam a, modi saepe totam enim facilis commodi quisquam alias maiores dolorum!</li><br>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus placeat autem natus nisi laborum at illum eos molestiae aperiam a, modi saepe totam enim facilis commodi quisquam alias maiores dolorum!</li><br>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus placeat autem natus nisi laborum at illum eos molestiae aperiam a, modi saepe totam enim facilis commodi quisquam alias maiores dolorum!</li><br>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus placeat autem natus nisi laborum at illum eos molestiae aperiam a, modi saepe totam enim facilis commodi quisquam alias maiores dolorum!</li><br>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus placeat autem natus nisi laborum at illum eos molestiae aperiam a, modi saepe totam enim facilis commodi quisquam alias maiores dolorum!</li>
			</ol>
		</div>

		<div class="col-md-8 col-md-offset-2">
			<h3><a>Proceed >>></a></h3>
			
			{!! Form::open(array('route' => 'candidates.store')) !!}
    			{{ Form::label('name', 'Name of Candidate:') }}
    			{{ Form::text('name', null,['class'=>'form-control']) }}

    			{{ Form::label('age', 'Age:') }}
    			{{ Form::text('age', null,['class'=>'form-control']) }}

    			{{ Form::label('state', 'State:') }}
    			{{ Form::text('state', null,['class'=>'form-control']) }}

    			{{ Form::label('party', 'Political Party:') }}
    			{{ Form::text('party', null,['class'=>'form-control']) }}

  				{{ Form::label('sex', 'Sex:') }}
    			{{ Form::text('sex', null,['class'=>'form-control']) }}

    			{{ Form::label('biography', 'Biography:') }}
    			{{ Form::textarea('biography', null,['class'=>'form-control']) }}

    			{{ Form::submit('submit', ['class'=>'btn btn-success btn-lg', 'style'=>'margin-top:20px;'])}}

			{!! Form::close() !!}
		</div>
	</div>

 

@stop