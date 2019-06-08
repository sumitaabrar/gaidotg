<header class="topbar2">
  
  <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">

    <!-- Logo -->
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html">
          <b> <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> </b>
          <span> <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> </span> 
        </a>
    </div>

    <!--Actual Nav-->
    <div class="navbar-collapse">
      <ul class="navbar-nav mr-auto mt-md-0">

        <!-- 3bars for toggling sidenav -->
        <li class="nav-item"> 
          <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
            <i class="mdi mdi-menu"></i>
          </a> 
        </li>

        <!-- Search -->
        <li>
          <div class="single-widget" id="mc_embed_signup">
              <form action="" method="get" class="form-inline">
                <input class="form-control" name="SEARCH" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'" type="text">
                  <button class="click-btn btn btn-default">
                      <i class="ti-search" aria-hidden="true"></i>
                  </button>
                <div class="info"></div>
              </form>
            </div>
        </li>


      </ul>

      <!-- User profile and Menu itmes-->
      <ul class="navbar-nav my-lg-0">
          <!-- Profile -->
          <li class="nav-item  menu-active"> 
            <a class="nav-link" href="/dis"><span>Discussion</span>  
              <i class="mdi mdi-account-multiple navi"></i>
            </a>
          </li>
          <li class="nav-item "> 
            <a class="nav-link" href="/rec"><span>Recommendation</span>  
              <i class="mdi mdi-star-circle navi"></i>
            </a>
          </li>
          
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                </li>
            @endif
          @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="user-name">{{ Auth::user()->name }} </span>
                    <img src="assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          @endguest
      </ul>

    </div>
  </nav>
</header>