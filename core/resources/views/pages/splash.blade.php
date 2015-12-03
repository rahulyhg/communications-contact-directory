@extends('_layouts/splash')

@section('content')
<a class="splash-div" href="{{ route('home') }}">
    <div class="wrapper splash-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="splash-div-link">
                    <img src="{{ asset('assets/img/logo.png') }}" class="img-responsive img-center" />
                    <h1 class="page-title text-center">{{ Config::get('app.site_description') }}</h1>
                    <h2 class="page-subtitle text-center">A Washington County LUT Project</h2>
                    </div><!-- /.splash-div-link -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</a>
@stop
