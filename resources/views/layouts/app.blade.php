<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Chicago Potters') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header><img src="{{asset('/images/cpbanner.svg')}}" alt="ChicagoPotters.com">
<nav class="navbar navbar-expand-sm navbar-dark">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/links">Links</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/events">Events</a>
      </li>

    </ul>
  </div>
</nav>
</header>
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
        <main>
            @yield('content')
        </main>
        <footer>
<p>This site owned and operated by Robert J. Milanowski and Howard Z. Skolnik</p>
<p>&copy; 2003-{{ now()->year }} &mdash; Robert J. Milanowski. &nbsp;All rights reserved.</p>      
        </footer>
    </div>
</body>
</html>
