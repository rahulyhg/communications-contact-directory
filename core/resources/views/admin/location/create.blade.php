@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::open( ['route' => 'admin.location.store','class' => 'validate-form'] ) !!}
    @include('admin.location.partials.form', ['submit_text'=>'Create Organization'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
