@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::open( ['route' => 'admin.department.store'] ) !!}
    @include('admin.department.partials.form', ['submit_text'=>'Create Department'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
