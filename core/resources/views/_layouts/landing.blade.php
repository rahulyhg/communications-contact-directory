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
                        <a href="{{ route('splash') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" class="img-responsive img-center" />
                        </a>
                    </div><!-- /.sign-in-form -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            @yield('content')
        </div><!-- /.wrapper -->
    </div><!-- /.page-content -->

@include('_includes/scripts')
@include('_includes/analytics')

</body>
</html>
