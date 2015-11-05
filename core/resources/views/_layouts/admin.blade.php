<!DOCTYPE html>
<html lang="en">
<head>
  @include('_includes/head')
</head>

<body class="fixed-top">
  @include('_includes/admin_header')

  <div class="container-fluid admin-content">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar admin-sidebar">
      @include('_includes/admin_navigation')
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      @yield('content')
      </div>
    </div>
  </div>

  @include('_includes/scripts')
  @include('_includes/analytics')
</body>
</html>
