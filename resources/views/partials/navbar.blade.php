<header>
    <nav class="navbar navbar-expand-lg fw-semibold fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'beranda') ? 'actived' : ''}}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'museum') ? 'actived' : ''}}" href="/museum">Museum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'galeri') ? 'actived' : ''}}" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'kuliner') ? 'actived' : ''}}" href="/kuliner">Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'rekreasi') ? 'actived' : ''}}" href="/rekreasi">Tempat Rekreasi</a>
                </li>
                @if (Route::current()->getName() != 'index')
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="uil uil-search"></i></a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><button type="button" class="btn btn-purple">Login</button></a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                @endif   
                </ul>
            </div>
        </div>
    </nav>
</header>
