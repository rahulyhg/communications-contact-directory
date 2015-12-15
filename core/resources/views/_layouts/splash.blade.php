<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes/head')
</head>

<body>
    <div id="bg"><img src="/assets/img/splash-page-background.jpg" alt=""></div>

    <div class="page-content">
        @yield('content')
    </div>

    @include('_includes/scripts')
    @include('_includes/analytics')
</body>
</html>
