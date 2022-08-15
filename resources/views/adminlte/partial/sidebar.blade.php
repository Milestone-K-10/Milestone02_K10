<div class="sidebar">
  <header class="left">
    <div class="logo-and-text">
      <!-- Gambar logo -->
      <img src="{{asset("images/DigiPof2.png")}}">
      <!--Text Logo-->
      <h1>DigiPoF</h1>
    </div>
  </header>
  <nav>
    <!-- Kalau di halaman lain, tinggal ganti id selected ke link yg bersesuaian -->
    <div class="nav-items">
        @auth
            {{Auth::user()->name}}
        @endauth
        @guest
            <a href="/">Guest</a>
        @endguest
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
      <a href="#">Settings</a>
    </div>
    @auth
      @if (Auth::user()->role == "admin")
          <div class="nav-items">
            <a href="/unverified-reports">Unverified Reports</a>
          </div>
      @endif
    @endauth
  </nav>
</div>