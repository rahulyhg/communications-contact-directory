<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes/head')
</head>

<body>

    <div class="page-content">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="sign-in-form">
                    <div class="opaque-block">
                        <a href="{{ route('splash') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" class="img-responsive img-center" />
                        </a>
                    </div><!-- /.opaque-block -->
                    </div><!-- /.sign-in-form -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            @yield('content')
        </div><!-- /.wrapper -->
    </div><!-- /.page-content -->

    <div id="bg"><img src="/assets/img/landing-page-background.jpg" alt=""></div>
@include('_includes/scripts')
@include('_includes/analytics')

</body>
</html>
