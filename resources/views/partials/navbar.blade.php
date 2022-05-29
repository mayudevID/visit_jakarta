<nav class="navbar navbar-expand-lg fw-semibold fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link actived" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Museum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kuliner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tempat Rekreasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="uil uil-search"></i></a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-purple">Login</button></a>
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

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </ul>
        </div>
    </div>
</nav>