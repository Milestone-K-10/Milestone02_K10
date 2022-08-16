<div class="sidebar">
    <header class="left">
        <div class="logo-and-text">
            <!-- Gambar logo -->
            <img src="{{ asset('images/DigiPof2.png') }}">
            <!--Text Logo-->
            <h1>DigiPoF</h1>
        </div>
    </header>
    <nav>
        <!-- Kalau di halaman lain, tinggal ganti id selected ke link yg bersesuaian -->
        <div class="nav-items">
            <div class="dropside">
                <button class='dropbtn'>
                    @guest
                        Guest
                    @endguest
                    @auth
                        {{ Auth::user()->name }}
                    @endauth
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropside-content">
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @endguest
                    @auth
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>
        </div>
        <div class="nav-items" id="selected">
            <ion-icon name="home"></ion-icon>
            <a href="/">Home</a>
        </div>
        <div class="nav-items">
            <ion-icon name="compass"></ion-icon>
            <a href="/about">About</a>
        </div>
        <div class="nav-items">
            <ion-icon name="people"></ion-icon>
            <a href="/community">Community</a>
        </div>
        <div class="nav-items">
            <ion-icon name="information-circle"></ion-icon>
            <a href="/report/create">Report</a>
        </div>
        <div class="nav-items">
            <ion-icon name="settings"></ion-icon>
            @guest
                <a href="/login">Settings</a>
            @else
                <a href="/settings">Settings</a>
            @endif
        </div>
        @auth
            @if (Auth::user()->role == 'admin')
                <div class="nav-items">
                    <a href="/unverified-reports">Unverified Reports</a>
                </div>
            @endif
        @endauth
    </nav>
</div>
