<header>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">Navbar</a>
            <div id="navbarNav collapse navbar-collapse" class="">
                <ul class="d-flex ">
                    <li class="">
                        <a style="color: white;" class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="">
                        <a style="color: white;" class="nav-link  {{Route::currentRouteName() == 'movies.index' ? 'active' : '' }}" href="{{ route('movies.index') }}">Movies</a>
                    </li>
                    <li class="">
                        <a style="color: white;" class="nav-link" href="#">Books</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

