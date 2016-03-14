<!DOCTYPE html>
<html lang="en">
<head>
    @include('_includes/head')
</head>

<body>

    <div class="page-content">
        @yield('content')
    </div>

    @include('_includes/scripts')
    @include('_includes/analytics')
</body>
</html>
