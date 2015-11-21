@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::model($cms, ['method'=>'PATCH', 'route' => ['admin.cms.update', $cms->id]] ) !!}
    @include('admin.cms.partials.form', ['submit_text'=>'Update CMS Block'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
