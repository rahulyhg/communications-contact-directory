@extends('_layouts/app')

@section('content')
<div class="container">
	<div class="row">
		<div class="sign-in-form">
			<div class="well">
				<h3>Reset Password</h3>
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form class="form" role="form" method="POST" action="{{ url('/password/email') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="control-label">Email Address</label>
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">
							Send Password Reset Link
						</button>
					</div>
				</form>
			</div><!-- /.well -->
		</div><!-- /.sign-in-form -->
	</div><!-- /.row -->
</div><!-- /.container -->
@endsection
