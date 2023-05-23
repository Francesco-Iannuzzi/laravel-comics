<header>
    <div class="container d-flex justify-content-between text-uppercase">
        <div class="logo d-flex">
            <a href="{{ route('home')}}"><img class="ms-2 align-self-center" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
        </div>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'characters' ? 'current_page text-light' : ''}}" href="{{ route('characters')}}">characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'comics' ? 'current_page text-light' : ''}}" href="{{ route('comics')}}">comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'movies' ? 'current_page text-light' : ''}}" href="{{ route('movies')}}">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'tv' ? 'current_page text-light' : ''}}" href="{{ route('tv')}}">tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'games' ? 'current_page text-light' : ''}}" href="{{ route('games')}}">games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'collectibles' ? 'current_page text-light' : ''}}" href="{{ route('collectibles')}}">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'videos' ? 'current_page text-light' : ''}}" href="{{ route('videos')}}">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'fans' ? 'current_page text-light' : ''}}" href="{{ route('fans')}}">fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'news' ? 'current_page text-light' : ''}}" href="{{ route('news')}}">news</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4 {{ Route::currentRouteName() === 'shop' ? 'current_page text-light' : ''}}" href="{{ route('shop')}}">shop</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>