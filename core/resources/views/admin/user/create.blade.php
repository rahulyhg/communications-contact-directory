@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    {!! Form::open( ['route' => 'store_users'] ) !!}
    <div class="form-group">
      {!! Form::label('first_name', 'First Name') !!}
      {!! Form::text('first_name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Firstname']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('last_name', 'Last Name') !!}
      {!! Form::text('last_name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Lastname']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::text('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'email@domain.com']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('admin', 'Is user an Admin?') !!}
      {!! Form::checkbox('admin', 'admin', false) !!}
    </div>

    <div class="form-group">
      {!! Form::label('note', 'Administrative Note') !!}
      <span class="help-block">Note, the administrative note is not displayed to users.</span>
      {!! Form::textarea('note', null, ['class'=>'form-control', 'placeholder'=>'Administrative notes go here.']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
      <a href="{{ route('store_users') }}" class="btn btn-default">Cancel</a>
    </div>
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
