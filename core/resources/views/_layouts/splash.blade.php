<!DOCTYPE html>
<html lang="en">
<head>
  @include('_includes/head')
</head>

<body>

  <div class="page-content">
    <div class="wrapper">
      @yield('content')
    </div>
  </div>

  @include('_includes/scripts')
  @include('_includes/analytics')
</body>
</html>
