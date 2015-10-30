@extends('_layouts/app')

@section('content')
<div class="container">
	<div class="row">
		<div class="sign-in-form">
			<div class="well">
				<h3>Contact Us</h3>

        {!! Form::open() !!}
					<div class="form-group">
					{!! Form::label('name','Name') !!}
					{!! Form::text('name', null, array('class'=>'form-control','placeholder'=>'Name')) !!}
					</div><!-- /.form-group -->
        {!! Form::close() !!}

			</div><!-- /.well -->
		</div><!-- /.sign-in-form -->
	</div><!-- /.row -->
</div><!-- /.container -->
@stop
