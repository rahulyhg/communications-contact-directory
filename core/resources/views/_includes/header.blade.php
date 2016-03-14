<header>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-shadow-dark" href="{{ route('home') }}">{{ Config::get('app.site_title') }}</a>
            </div>
            @include('_includes/sub_navigation')
        </div>
    </nav>

    @include('_includes/flash')

    <section class="header-section">
        <div class="container pre-post-padding">
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{ route('home') }}">
                        <img src="https://s3.amazonaws.com/washcomultimedia/web/img/logo.png" class="img-responsive img-center img-padded">
                    </a>
                </div>
                <div class="col-sm-9">
                    <h1 class="page-title">{{ Config::get('app.site_title') }}</h1>
                    @if (isset($title))
                    <h2 class="page-subtitle">{{ $title }}</small></h2>
                    @endif
                </div>
            </div>
        </div><!-- /.container -->

    </section><!-- /.header-section -->
</header>
