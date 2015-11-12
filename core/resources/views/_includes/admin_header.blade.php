
<nav class="navbar navbar-inverse navbar-fixed-top navbar-admin">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin') }}">Admin Panel{{ (isset($title)) ? " :: ".$title : "" }}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <div class="visible-xs">
          @include('_includes/admin_navigation')
        </div>
        <li><a href="{{ route('home') }}" target="_blank" class="admin-nav-link"><i class="fa fa-external-link"></i>&nbsp;Front End</a></li>
        <li><a href="{{ route('logout') }}" class="admin-nav-link" title="Sign-out"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Sign-out</a></li>
      </ul>
    </div>
  </div>
</nav>
