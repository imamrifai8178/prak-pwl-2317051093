<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('user.index') }}">Aplikasi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
      aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('user.index') }}">Daftar User</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('user.create') }}">Buat User</a></li>
      </ul>
    </div>
  </div>
</nav>
