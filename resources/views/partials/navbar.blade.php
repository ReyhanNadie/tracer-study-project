<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container"> 
      <a class="navbar-brand" href="#">Tracer Study</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link {{ request()->is('home')?'active':''}}" aria-current="page" href="{{ route('home') }}">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link {{ request()->is('statistik')?'active':''}}" href="{{ route('statistik') }}">Statistik</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link {{ request()->is('alumni')?'active':''}}" href="{{ route('alumni') }}">Alumni</a>
          </li>
        </ul>
        <div>
          <button class="button-primary">Masuk</button>
        </div>
      </div>
    </div>
  </nav>