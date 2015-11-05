@extends('_layouts/admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="content">

    <h1 class="page-title">{{ $title }}</h1>
    {!! Form::open() !!}
    <p>{{ $user->first_name }}</p>
    {!! Form::close() !!}

    </div><!-- /.content -->
  </div><!-- /.row -->
</div><!-- /.container -->
@stop