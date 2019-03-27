<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Trilum | @yield('title', 'Trilum')</title>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="/">Trilum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Actividades
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/events/all/culturales">Culturales</a>
              <a class="dropdown-item" href="/events/all/deportivas">Deportivas</a>
              <a class="dropdown-item" href="/events/all/cenas">Cenas</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Viajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gente</a>
          </li>
        </ul>
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                  <li class="nav-item avatar">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                    </a>
                 </li>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
                @else
                 <li class="nav-item">
                   <a class="nav-link" href="/newuser">
                     Register
                   </a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="/loguser">
                     Log in
                   </a>
                 </li>
                @endif
            </ul>
          </div>
      </div>
    </nav>
    <div class="container-fluid bg-warning main-div">
      @yield('content')
    </div>
  </body>
</html>
