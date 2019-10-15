<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ Config::get('app.name') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <!-- Style -->
  <style media="screen">
  .main {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  .section {
    flex: 1;
  }
  .footer {
    max-height: 10vh;
  }
</style>

</head>
<body class="main">
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="">
       {{-- <img src="" width="112" height="28"> --}}
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasic" class="navbar-menu">
      <div class="navbar-start">
        <div class="buttons">
          <a href="/" class="navbar-item">
            <i class="fas fa-home"></i>
          </a>

          <!-- Yield navbar -->
          @yield('navbar')
        </div>
      </div>
    </div>
  </nav>

  <section class="section">
    <div class="container">

      <!-- Yield title -->
      @yield('title')

      <!-- Yield content -->
      @yield('content')

    </div>
  </section>

  <footer class="footer">
    <div class="content has-text-centered is-small">
      <p>
        <strong>{{ Config::get('app.name') }}</strong>
        <br>
        <a href="https://github.com/tintamarre/generator">
          The source code is available on GitHub <i class="fab fa-github"></i>.
        </a>
      </p>
    </div>
  </footer>

  <script type="text/javascript">
  (function() {
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#'+burger.dataset.target);
    burger.addEventListener('click', function(){
      burger.classList.toggle('is-active');
      nav.classList.toggle('is-active');
    });
  })();
  </script>
</body>
</html>
