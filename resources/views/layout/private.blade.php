<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Home</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav d-flex">
          @if (Auth::check())
            <a class="navbar-brand" href="{{route('admin.dashboard')}}">Home</a>
            <a href="{{route('service.list')}}" class="nav-link me-3">Usluge</a>
            <a href="{{route('worker.list')}}" class="nav-link me-3">Radnici</a>
            <a href="{{route('user.list')}}" class="nav-link me-3">Korisnici</a>
            <a class="nav-link me-5" href="{{route('logout')}}">Logout</a>
          @else
            <a class="navbar-brand" href="{{route('login')}}">Home</a>
            <a href="{{route('register')}}" class="nav-link">Registracija</a>
            <a href="{{route('login')}}" class="nav-link">Login</a>
          @endif
      </div>
    </div>
  </div>
</nav>
  </head>
  <body>
    <div class="container">
        @yield("content")
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>