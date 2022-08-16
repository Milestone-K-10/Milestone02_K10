<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/milestone_edit.css')}}" />
    <link rel="stylesheet" href="{{asset('css/community.css')}}">
    <title>DigiPoF</title>
  </head>
  <body>
    @include('adminlte.partial.sidebar')
    <div class="content">
      <header class="right">
        <div class="left-content">
            <div>
                <h3>Hello there,</h3>
                <h2>Any Suspecious move?</h2>
            </div>
        </div>
        <!-- Ga ngerti cara bikin search box dan notifikasi -->
        <div class="right-content">
            <div class="search-box">
                <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-3" viewBox="0 0 40 41">
                    <path d="M26.51 28.573c-2.803 2.34-6.412 3.748-10.35 3.748C7.236 32.32 0 25.087 0 16.16 0 7.236 7.235 0 16.16 0c8.926 0 16.16 7.235 16.16 16.16 0 4.213-1.61 8.048-4.25 10.925L40 39.015l-1.524 1.524L26.51 28.572zm-10.35 2.132c8.033 0 14.545-6.512 14.545-14.544S24.193 1.617 16.16 1.617 1.617 8.128 1.617 16.16c0 8.033 6.512 14.545 14.545 14.545z"
                    fill-rule="evenodd" />
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                    <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
                    fill-rule="evenodd" />
                    </symbol>
                </svg>

                <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                    <div role="search" class="sbx-custom__wrapper">
                    <input type="search" name="search" placeholder="Type Keywords" autocomplete="off" required="required" class="sbx-custom__input">
                    <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                        <svg role="img" aria-label="Search">
                        <use xlink:href="#sbx-icon-search-3"></use>
                        </svg>
                    </button>
                    <button type="reset" title="Clear the search query." class="sbx-custom__reset">
                        <svg role="img" aria-label="Reset">
                        <use xlink:href="#sbx-icon-clear-5"></use>
                        </svg>
                    </button>
                    </div>
                </form>
                <script type="text/javascript">
                    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
                </script>
            </div>

            <div class="header-icon">
                <ion-icon name="notifications-outline" class="notification"></ion-icon>
            </div>
        </div>
      </header>

      <main>
        <div class="jumbotron">
            <div class="left-jumbotron">
                <div class="jumbotron-text">
                    <h2>Report Person</h2>
                    <p>Upload your proof here</p>
                        <div class="seemore">
                          <a href="/report" class="myButton">See More
                            <ion-icon name="arrow-forward-outline" class="seemore-icon"></ion-icon> </a>

                        </div>
                </div>
            </div>
            <div class="right-jumbotron">
                <div class="jumbotron-image">
                  <img src="{{asset('images/gambar orang.png')}}" class="gambar_orang">
                </div>
            </div>
        </div>

        <div class="main-content">
            @yield('content')
        </div>
        <!-- button see more -->
      </main>
      <!-- Sisanya ga ngerti -->
    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    @yield('script')
  </body>
</html>
