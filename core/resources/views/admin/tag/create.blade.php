@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::open( ['route' => 'admin.tag.store','class' => 'validate-form'] ) !!}
    @include('admin.tag.partials.form', ['submit_text'=>'Create Tag'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
