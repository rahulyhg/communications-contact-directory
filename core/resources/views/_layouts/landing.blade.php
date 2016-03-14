<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes/head')
</head>

<body>

    <div class="page-content pre-post-padding">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="sign-in-form">
                    <div class="opaque-block">
                        <img src="{{ asset('assets/img/logo.png') }}" class="img-responsive img-center" />
                    </div><!-- /.opaque-block -->
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
