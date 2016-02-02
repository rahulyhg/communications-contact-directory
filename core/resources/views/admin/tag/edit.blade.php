@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::model($tag, ['method'=>'PATCH', 'route' => ['admin.tag.update', $tag->id],'class' => 'validate-form'] ) !!}
    @include('admin.tag.partials.form', ['submit_text'=>'Update Tag'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
