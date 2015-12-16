<header>
  <nav class="navbar navbar-static-top navbar-public">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" class="brand-logo" /></a>
      </div>
    </div>
  </nav>

  @include('_includes/sub_navigation')

  <section class="header-section">
    <div class="container pre-post-padding">
      <h1 class="page-title">{{ Config::get('app.site_title') }}</h1>
      @if (isset($title))
      <h2 class="page-subtitle">{{ $title }}</small></h2>
      @endif
    </div><!-- /.container -->

  </section><!-- /.header-section -->
</header>
