<header class="topbar2">
  
  <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">

    <!-- Logo -->
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('index') }}">
          <b> <img src="../assets/images/logo-light-icon.png" alt="gaido" class="light-logo" /> </b>
          <span> <img src="../assets/images/logo-light-text.png" class="light-logo" alt="gaido" /> </span> 
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
          {!!Form::open(['action' => 'PagesController@search', 'method' => 'POST' ])!!}
          <div class="single-widget input-group mb-3 " id="mc_embed_signup">
            {{Form::text('key', '' , [ 'class' => 'form-control', 'placeholder' => 'Search', 'onfocus' => 'this.placeholder = \'\'', 'onblur' => 'this.placeholder = \'Search\'', 'aria-label' => 'Search', 'aria-describedby' => 'searchBtn' ]) }}
            <div class="input-group-append">
              {{ Form::button('<i class="ti-search" aria-hidden="true"></i>', [ 'class' => 'click-btn btn btn-default', 'type' => 'submit', 'id' => 'searchBtn' ]) }}
            </div>
          </div>
          {!!Form::close()!!}
        </li>

        
      </ul>

      <!-- User profile and Menu itmes-->
      <ul class="navbar-nav my-lg-0">
          <!-- Menu Items -->
          
          <li class="nav-item "> 
            <a class="nav-link" href="{{ route('dis.index') }}"><span> Discussions </span>  
              <i class="mdi mdi-hexagon-multiple navi"></i>
            </a>
          </li>
          <li class="nav-item "> 
            <a class="nav-link" href="{{ route('rec.index') }}"><span> Recommendations </span>  
              <i class="mdi mdi-clipboard-check navi"></i>
            </a>
          </li>
          
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                  <span class="user-name">{{ __('Login') }}</span>
                  <i class="mdi mdi-account-circle navi"></i>
                </a>  
            </li>
            
          @else
            <!-- Profile -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false" >
                    <span class="user-name">{{ Auth::user()->name }} </span>
                    <img src="../storage/images/users/{{ Auth::user()->image }}" alt="user" class="profile-pic m-r-10" />
                </a>

                
            </li>
          @endguest
      </ul>

    </div>
  </nav>
</header>
