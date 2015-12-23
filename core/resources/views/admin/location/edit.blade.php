@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::model($location, ['method'=>'PATCH', 'route' => ['admin.location.update', $location->id],'class' => 'validate-form'] ) !!}
    @include('admin.location.partials.form', ['submit_text'=>'Update Location'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
