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
          <li class="active"><a href="#">Active Link</a></li>
          <li><a href="#about">Link</a></li>
          <li><a href="#contact">Link</a></li>
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