@extends('_layouts/admin')

@section('content')
<div class="content">

  <h1 class="page-title">{{ $title }}</h1>
  <div class="well">

    @include('errors.validation_errors')

    {!! Form::model($user, ['method'=>'PATCH', 'route' => ['admin.users.update', $user->id]] ) !!}
    @include('admin.user.partials.form', ['submit_text'=>'Update User'])
    {!! Form::close() !!}

  </div><!-- /.well -->
</div><!-- /.content -->
@stop
