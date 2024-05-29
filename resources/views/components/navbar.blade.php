<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <img src="/images/v49_156.png" alt="RBS" width="60" height="auto" class="logobrand">
        <a class="navbar-brand ms-4" href="{{ Auth::check() ? route('home') : route('index') }}">Rumah Belajar Spirit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ml-extra">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') || request()->is('home') ? 'active' : '' }}"
                        href="{{ Auth::check() ? route('home') : route('index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('paketkelas') ? 'active' : '' }}"
                        href="{{ route('paketkelas') }}">Paket Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/tryout">Tryout UTBK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">Tentang Kami</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-user fa-2xl"></i><!-- User icon -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item disabled" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endauth


            </ul>
        </div>
    </div>
</nav>
