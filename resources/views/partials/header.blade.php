<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="https://www.youtube.com/watch?v=nLVYVbDy53Y">PirateBay</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'guests.home' ? 'active' : '' }}" href="{{ route('guests.home') }}" href="{{ route('guests.home') }}" aria-current="page">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'guests.movies' ? 'active' : '' }}" href="{{ route('guests.movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'guests.tv_series' ? 'active' : '' }}" href="{{ route('guests.tv_series') }}">TV Series</a>
                    </li>
                </ul>
                
            </div>
            <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="What do you want ?" />
                </form>
        </div>
    </nav>

</header>
