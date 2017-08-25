<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

<div id="app">

<section class="hero is-primary">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">

  <nav class="navbar is-transparent">
    <div class="navbar-brand">
      <a class="navbar-item" href="http://bulma.io">
        <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>
      <span class="navbar-item">test</span>
      <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
        <span class="icon" style="color: #333;">
          <i class="fa fa-github"></i>
        </span>
      </a>

      <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
        <span class="icon" style="color: #55acee;">
          <i class="fa fa-twitter"></i>
        </span>
      </a>

      <div class="navbar-burger burger" data-target="navMenuTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navMenuTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link  is-active" href="/documentation/overview/start/">
            Docs
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
              Modifiers
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/columns/basics/">
              Columns
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
              Layout
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/form/general/">
              Form
            </a>
            <a class="navbar-item " href="http://bulma.io/documentation/elements/box/">
              Elements
            </a>

              <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
                Components
              </a>

            <hr class="navbar-divider">
            <div class="navbar-item">
              <div>
                <p class="is-size-6-desktop">
                  <strong class="has-text-info">0.5.1</strong>
                </p>

                  <small>
                    <a class="bd-view-all-versions" href="/versions">View all versions</a>
                  </small>

              </div>
            </div>
          </div>
        </div>

        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link " href="http://bulma.io/blog/">
            Blog
          </a>
          <div id="blogDropdown" class="navbar-dropdown is-boxed" data-style="width: 18rem;">
              <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">03 Aug 2017</small>
                  </p>
                  <p>New feature: list of tags</p>
                </div>
              </a>
              <a class="navbar-item" href="/2017/08/01/bulma-bootstrap-comparison/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">01 Aug 2017</small>
                  </p>
                  <p>Bulma / Bootstrap comparison</p>
                </div>
              </a>
              <a class="navbar-item" href="/2017/07/24/access-previous-bulma-versions/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">24 Jul 2017</small>
                  </p>
                  <p>Access previous Bulma versions</p>
                </div>
              </a>
            <a class="navbar-item" href="http://bulma.io/blog/">
              More posts
            </a>
            <hr class="navbar-divider">
            <div class="navbar-item">
              <div class="navbar-content">
                <div class="level is-mobile">
                  <div class="level-left">
                    <div class="level-item">
                      <strong>Stay up to date!</strong>
                    </div>
                  </div>
                  <div class="level-right">
                    <div class="level-item">
                      <a class="button bd-is-rss is-small" href="http://bulma.io/atom.xml">
                        <span class="icon is-small">
                          <i class="fa fa-rss"></i>
                        </span>
                        <span>Subscribe</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="navbar-item has-dropdown is-hoverable">
          <div class="navbar-link">
            More
          </div>
          <div id="moreDropdown" class="navbar-dropdown is-boxed">
            <a class="navbar-item " href="http://bulma.io/extensions/">
              <div class="level is-mobile">
                <div class="level-left">
                  <div class="level-item">
                    <p>
                      <strong>Extensions</strong>
                      <br>
                      <small>Side projects to enhance Bulma</small>
                    </p>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <span class="icon has-text-info">
                      <i class="fa fa-plug"></i>
                    </span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <a class="navbar-item " href="http://bulma.io/expo/">
          <span class="bd-emoji">🎨</span>
          Expo
        </a>
        <a class="navbar-item " href="http://bulma.io/love/">
          <span class="bd-emoji">❤️</span>
          Love
        </a>
      </div>

      <div class="navbar-end">
        <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
          <span class="icon" style="color: #333;">
            <i class="fa fa-github"></i>
          </span>
        </a>
        <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
          <span class="icon" style="color: #55acee;">
            <i class="fa fa-twitter"></i>
          </span>
        </a>
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://bulma.io" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&hashtags=bulmaio&url=http://bulma.io&via=jgthms">
                <span class="icon">
                  <i class="fa fa-twitter"></i>
                </span>
                <span>
                  Tweet
                </span>
              </a>
            </p>
            <p class="control">
              <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
                <span class="icon">
                  <i class="fa fa-download"></i>
                </span>
                <span>Download</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav>

  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcenterd">
        <div class="column">
          <h1 class="title">
           Title
          </h1>
          <h2 class="subtitle">
            Subtitle
          </h2>
        </div>
        <div class="column is-narrow">
          <img src="" width="240" alt="banner">
        </div>
      </div>
    </div>
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs menu is-boxed">
      <div>
        <ul>
          <router-link tag="li" to="/" exact><a>Home</a></router-link>
          <router-link tag="li" to="/blog" exact><a>Blog</a></router-link>
          <router-link tag="li" to="/blog/detail"><a>Detail</a></router-link>
        </ul>
      </div>
    </nav>
  </div>
</section>

<section>
  <breadcrumb :list="list"></breadcrumb>
  <router-view></router-view>
</section>

<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
      </p>
      <p>
        <a class="icon" href="https://github.com/jgthms/bulma">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>

<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
      @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
      @endif
    </div>
  @endif
</div>

</div>

</body>

<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>

</html>

