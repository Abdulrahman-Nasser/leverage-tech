  <!-- start header -->
  <header class="header mobile_bg">
      <div class="container">
          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                  <div class="left-side">
                      <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img/leverage-logo.png') }}"
                              class="logo" alt=""></a>
                      <a class="navbar-brand mobile" href="index.html"> LEVERAGE</a>
                  </div>



                  <div class="left-side d-flex">


                      @guest
                          <a href="{{ route('login') }}" class="navbar-toggler">
                              <i class="fa-solid fa-right-to-bracket login_icon"></i>
                          </a>
                      @else
                          <a href="{{ route('logout') }}" class="navbar-toggler">
                              <i class="bi bi-person login_icon"></i>
                          </a>
                      @endguest

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <i class="fa-solid fa-bars-staggered"></i>
                      </button>

                  </div>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#about">About</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#services">Services</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#contact">Contact</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('team') }}">Team</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#services">Portfolio</a>
                          </li>
                      </ul>
                  </div>
              </div>

              @guest
                  <a href="{{ route('login') }}" class="btn btn-login">
                      login
                  </a>
              @else
                  <a class="btn btn-login" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              @endguest




          </nav>
      </div>
  </header>
  <!-- end header -->
