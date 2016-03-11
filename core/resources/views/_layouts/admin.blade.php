<!DOCTYPE html>
<html lang="en">
<head>
  @include('_includes/admin_head')
</head>

<body class="fixed-navbar">
  @include('_includes/admin_header')

  <div class="container-fluid admin-content">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar admin-sidebar">
      @include('_includes/admin_navigation')
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="container-fluid">
          @include('_includes/flash')
          @yield('content')

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    </div>
  </div>

  @include('_includes/scripts')
  @include('_includes/analytics')
</body>
</html>
