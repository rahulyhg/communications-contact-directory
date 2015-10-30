@extends('_layouts/app')

@section('content')
<div class="container">
	<div class="row">
		<div class="sign-in-form">
			<div class="well">
				<h3>Contact Us</h3>
        
        {!! Form::open() !!}
        {!! Form::close() !!}

			</div><!-- /.well -->
		</div><!-- /.sign-in-form -->
	</div><!-- /.row -->
</div><!-- /.container -->
@stop
