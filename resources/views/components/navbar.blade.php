<nav class="navbar navbar-expand-lg navbar-light bg-nav-custom shadow sticy-top fixed">
    <div class="container-fluid ">
        <a class="navbar-brand text-white me-5" href="{{ route('home') }}"><img class="logo" src="/img/logo.png"
                alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">{{__('ui.navbarHome')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page"
                        href="{{ route('indexArticle') }}">{{__('ui.navbarAds') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="linguaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.navbarCategories') }}</a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link text-white" href="{{ route('article.create') }}">{{__('ui.navbarCreateAd') }}</a>
                </li>
                <form action="{{ route('articles.search') }}" method="GET" class="d-flex ">
                    <input name="searched" class="form-control me-2" type="search" placeholder="{{__('ui.navbarPlaceholder') }}"
                        aria-label="Search">
                    <button id="search-navbar" class="btn btn-outline-light serch-button-navbar"
                        type="submit">{{__('ui.navbarSearch') }}</button>
                </form>

                {{-- Sezione Lingue --}}
                <li class="nav-item dropdown me-5 d-flex">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="linguaDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.navbarTongue') }}</a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <x-_locale lang='it' nation='it' />
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <x-_locale lang='en' nation='gb' />
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <x-_locale lang='es' nation='es' />
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
                {{-- Fine Sezione Lingue --}}
            </ul>
            {{-- revisore --}}
            @if (Auth::user() && Auth::user()->is_revisor)
                <li class=" me-3 li-none">
                    <a class="nav-link text-light btn btn btn-custom btn-sm position-relative" aria-current="page"
                        href="{{ route('revisor.index') }}">{{__('ui.navbarReviewer') }}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                            {{ App\Models\Article::toBeRevisonedCount() }}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            @endif
            @guest
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{__('ui.navbarRegister') }}</a>
                    </li>
                @endguest
            </ul>
            @auth
                <div class="dropdown">
                    <a class="btn btn-custom dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink"
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