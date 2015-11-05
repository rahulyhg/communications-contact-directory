@extends('_layouts/admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="content">

    <h1 class="page-title">{{ $title }}</h1>
    <div class="well">
    {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('first_name', 'First Name') !!}
      {!! Form::text('first_name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Firstname')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('last_name', 'Last Name') !!}
      {!! Form::text('last_name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Lastname')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'email@domain.com')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('admin', 'Is user an Admin?') !!}
      {!! Form::text('admin', null, array('required', 'class'=>'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Create User', array('class'=>'btn btn-primary form-control')) !!}
    </div>
    {!! Form::close() !!}
    </div>

    </div><!-- /.content -->
  </div><!-- /.row -->
</div><!-- /.container -->
@stop
