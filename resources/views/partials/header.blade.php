<header>
    <div class="container d-flex justify-content-between text-uppercase">
        <div class="logo d-flex">
            <a href="{{ route('home')}}"><img class="ms-2 align-self-center" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
        </div>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('characters')}}">characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('comics')}}">comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('movies')}}">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('tv')}}">tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('games')}}">games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('collectibles')}}">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('videos')}}">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('fans')}}">fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('news')}}">news</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-4" href="{{ route('shop')}}">shop</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>