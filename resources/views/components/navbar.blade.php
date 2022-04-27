<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar scroll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('indexArticle') }}">Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie</a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a></li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.create') }}">Crea annuncio</a>
                </li>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>
            @guest
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest
            </ul>
            @auth
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a href="/logout" class="dropdown-item"
                            onclick="event.preventDefault();document.getElementById('form-logout').submit();">Logout</a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none" id="form-logout">
                            @csrf
                        </form>

                    </ul>
                </div>

            @endauth

        </div>
    </div>
</nav>
