@extends('_layouts/landing')

@section('content')
<section class="copy-section splash-page">
  <div class="container">

    <div class="col-md-12">
      <h1 class="page-title text-center">{{ Config::get('app.site_description') }}</h1>
      <h2 class="page-subtitle text-center">Coming November 2015</h2>
    </div><!-- /.col -->

  </div><!-- /.half-container -->
</section><!-- /.copy-section -->
@stop
