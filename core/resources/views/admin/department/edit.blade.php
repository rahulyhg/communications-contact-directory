@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::model($department, ['method'=>'PATCH', 'route' => ['admin.department.update', $department->id]] ) !!}
    @include('admin.department.partials.form', ['submit_text'=>'Update Department'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
