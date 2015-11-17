@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::model($entry, ['method'=>'PATCH', 'route' => ['admin.directory.update', $entry->id]] ) !!}
    @include('admin.directory.partials.form', ['submit_text'=>'Update entry'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop