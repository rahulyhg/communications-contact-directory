@extends('_layouts/app')

@section('content')
<div class="container">
	<div class="row">
		<div class="sign-in-form">
			<div class="well">
				<h3>Sign-In</h3>
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

				<form class="form" role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="control-label">Email Address</label>
  					<p class="help-block">Use	<em>admin@localhost.com</em> during testing.</p>
						<input type="email" class="form-control" name="email" value="{{ old('email') }}">
					</div>

					<div class="form-group">
						<label class="control-label">Password</label>
  					<p class="help-block">Use	<em>password</em> during testing.</p>
						<input type="password" class="form-control" name="password">
					</div>

					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> Remember Me
							</label>
						</div>
					</div>

					<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Login</button>
					<p class="subtle"><a class="btn btn-link" href="{{ url('/password/email') }}"><i class="fa fa-life-ring"></i>&nbsp;Did you forget your password?</a></p>
					</div>
				</form>
			</div><!-- /.well -->
		</div><!-- /.sign-in-form -->
	</div><!-- /.row -->
</div><!-- /.container -->
@endsection
