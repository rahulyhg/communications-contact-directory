@extends('_layouts/splash')

@section('content')
<section class="copy-section splash-page">
  <div class="container">

    <div class="col-md-12">
      <h1 class="page-title text-center">{{ Config::get('app.site_description') }}</h1>
      <h2 class="page-subtitle text-center">A Washington County LUT Project</h2>
      @if (Auth::check())
      <p class="text-center"><a href="{{ route('home') }}">Directory</a></p>
      @else
      <p class="text-center"><a href="{{ route('login') }}">Sign in&nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
      @endif
    </div><!-- /.col -->

  </div><!-- /.half-container -->
</section><!-- /.copy-section -->
@stop
