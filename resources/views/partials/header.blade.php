<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  {{Route::currentRouteName() == 'movies.index' ? 'active' : '' }}" href="{{ route('movies.index') }}">Movies</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Books</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
