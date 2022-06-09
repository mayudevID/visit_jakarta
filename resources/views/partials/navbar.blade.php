<header>
    <nav class="navbar navbar-expand-lg fw-semibold fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
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
                            Halo, &nbsp {{  Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="/dashboard">
                                {{ __('Dashboard') }}
                            </a>

                            <a class="dropdown-item" href="/"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="/logout" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                 
                </ul>
            </div>
        </div>
    </nav>
</header>
