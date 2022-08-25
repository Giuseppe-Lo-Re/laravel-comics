<header>
    <div class="container">
        <div class="header-wrapper">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo-header">
                </a> 
            </div>

            <!-- Menu -->
            <div class="menu">
                <ul>
                    <li class="{{ Route::current()->getName() === 'characters' ? 'current' : ''}}">
                        <a href="{{ route('characters') }}">characters</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'comics' ? 'current' : ''}}">
                        <a href="{{ route('comics') }}">comics</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'movies' ? 'current' : ''}}">
                        <a href="{{ route('movies') }}">movies</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'tv' ? 'current' : ''}}">
                        <a href="{{ route('tv') }}">tv</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'games' ? 'current' : ''}}">
                        <a href="{{ route('games') }}">games</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'collectibles' ? 'current' : ''}}">
                        <a href="{{ route('collectibles') }}">collectibles</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'videos' ? 'current' : ''}}">
                        <a href="{{ route('videos') }}">videos</a> 
                    </li>

                    <li class="{{ Route::current()->getName() === 'fans' ? 'current' : ''}}">
                        <a href="{{ route('fans') }}">fans</a>
                    </li>

                    <li class="{{ Route::current()->getName() === 'news' ? 'current' : ''}}">
                        <a href="{{ route('news') }}">news</a>
                    </li>

                    <li class="{{ Route::current()->getName() === 'shop' ? 'current' : ''}}">
                        <a href="{{ route('shop') }}">shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>