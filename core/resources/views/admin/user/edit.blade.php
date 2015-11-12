@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('first_name', 'First Name') !!}
      {!! Form::text('first_name', $user->first_name, ['required', 'class'=>'form-control', 'placeholder'=>'Firstname']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('last_name', 'Last Name') !!}
      {!! Form::text('last_name', $user->last_name, ['required', 'class'=>'form-control', 'placeholder'=>'Lastname']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::text('email', $user->email, ['required', 'class'=>'form-control', 'placeholder'=>'email@domain.com']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('status', 'Account Status?') !!}
      <span class="help-block">Disabled accounts cannot login.</span>
      {!! Form::select('status', array('0' => 'Disabled', '1' => 'Enabled'), $user->status,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('note', 'Administrative Note') !!}
      {!! Form::textarea('note', $user->note, ['class'=>'form-control', 'placeholder'=>'Example: account was disabled on Tuesday.']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
      <a href="{{ route('store_users') }}" class="btn btn-default">Cancel</a>
    </div>
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
