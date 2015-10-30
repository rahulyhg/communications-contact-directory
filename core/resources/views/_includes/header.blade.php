<header>
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo.jpg') }}" height="60" /></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li{!! (isset($page_active) AND $page_active == 'table') ? " class='active'" : "" !!}><a href="/directory"><i class="fa fa-users"></i>&nbsp;Directory</a></li>
          <li{!! (isset($page_active) AND $page_active == 'about') ? " class='active'" : "" !!}><a href="/about"><i class="fa fa-info-circle"></i>&nbsp;About</a></li>
          <li{!! (isset($page_active) AND $page_active == 'contact') ? " class='active'" : "" !!}><a href="/contact"><i class="fa fa-comments-o"></i>&nbsp;Contact</a></li>
          @if (Auth::check())
          <li class="dropdown">
            <a href="/sign-out" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-caret-down"></i>&nbsp;{{{ Auth::user()->first_name }}}
            </a>
            <ul class="dropdown-menu">
              <li><a href="/account"><i class="fa fa-user"></i>&nbsp;My Account</a></li>
              <li><a href="/admin"><i class="fa fa-briefcase"></i>&nbsp;Admin</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/sign-out"><i class="fa fa-sign-out"></i>&nbsp;Sign-out</a></li>
            </ul>
          </li>
          @else
          <li>
            <a href="/sign-in"><i class="fa fa-sign-in"></i>&nbsp;Sign-in</a>
          </li>
          @endif
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <section class="header-section">
    <div class="container pre-post-padding">
      <h1 class="page-title">{{ Config::get('app.site_title') }}</h1>
      @if (isset($title))
      <h2 class="page-subtitle">{{ $title }}</small></h2>
      @endif
    </div><!-- /.container -->

  {{-- @include('_includes/tab_navigation') --}}

  </section><!-- /.header-section -->
</header>
