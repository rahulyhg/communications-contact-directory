@extends('_layouts/app')

@section('content')
<div class="container">
  <div class="row">
    <div class="sign-in-form">
      <div class="well">
        <h3>Contact Us</h3>

        {!! Form::open() !!}

          <div class="form-group">
            {!! Form::label('name', 'Name', ['class'=>'required']) !!}
            {!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'First Last']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('email', 'Email', ['class'=>'required']) !!}
            {!! Form::text('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'email@domain.com']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('subject', 'Subject', ['class'=>'required']) !!}
            {!! Form::select('subject', ['General message'=>'General message','Name correction, addition, or removal'=>'Name correction, addition, or removal'], null, ['required', 'class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('message', 'Message', ['class'=>'required']) !!}
            {!! Form::textarea('message', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your message here.']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
          </div>

        {!! Form::close() !!}

      </div><!-- /.well -->
    </div><!-- /.sign-in-form -->
  </div><!-- /.row -->
</div><!-- /.container -->
@stop
