<div id="navbar" class="collapse navbar-collapse sub-navbar">
  <div class="container">
    <div class="row">

      <ul class="nav navbar-nav">
        <li{!! (isset($page_active) AND $page_active == 'table') ? " class='active'" : "" !!}><a href="{{ route('directory') }}"><i class="fa fa-users"></i>&nbsp;Directory</a></li>
        <li{!! (isset($page_active) AND $page_active == 'about') ? " class='active'" : "" !!}><a href="{{ route('about') }}"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
        <li{!! (isset($page_active) AND $page_active == 'contact') ? " class='active'" : "" !!}><a href="{{ route('contact') }}"><i class="fa fa-comments-o"></i>&nbsp;Contact</a></li>
        @if (Auth::check())
        <li class="dropdown{!! (isset($page_active) AND $page_active == 'account') ? " active" : "" !!}">
          <a href="{{ route('logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-caret-down"></i>&nbsp;{{ Auth::user()->first_name }}
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a href="{{ route('account') }}"><i class="fa fa-user"></i>&nbsp;&nbsp;My Account</a></li> -->
            @if(Auth::user()->admin == 1)
            <li><a href="{{ route('admin') }}"><i class="fa fa-tachometer"></i>&nbsp;&nbsp;Admin Panel</a></li>
            <li role="separator" class="divider"></li>
            @endif
            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Sign-out</a></li>
          </ul>
        </li>
        @else
        <li>
          <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp;Sign-in</a>
        </li>
        @endif
      </ul>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /#navbar -->