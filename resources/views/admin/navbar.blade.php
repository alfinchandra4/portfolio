<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid container">
    <a class="navbar-brand" href="#">Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() == 'admin.index' ? 'active' : '' }}" aria-current="page" href="{{ route('admin.index') }}">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() == 'admin.create' ? 'active' : '' }}" aria-current="page" href="{{ route('admin.create') }}">Create Project</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="{{ route('logout') }}" class="text-decoration-none">Logout</a>
      </span>
    </div>
  </div>
</nav>