@extends('_layouts/app')

@section('content')
<section class="copy-section">
  <div class="container">

    <div class="col-md-12">
      @if( $content)
        {!! $content->content !!}
      @endif
    </div><!-- /.col -->

  </div><!-- /.half-container -->
</section><!-- /.copy-section -->
@stop
