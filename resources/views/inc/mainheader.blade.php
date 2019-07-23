<header class="topbar2 topbarCustom">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
  
      <!-- Logo -->
      <div class="navbar-header">
          <a class="navbar-brand" href="{{ route('index') }}">
            <b> <img src="assets/images/logo-light-icon.png" alt="gaido" class="light-logo" /> </b>
            <span> <img src="assets/images/logo-light-text.png" class="light-logo" alt="gaido" /> </span> 
          </a>
      </div>
  
      <!--Actual Nav-->
      <div class="navbar-collapse">
        <ul class="navbar-nav mr-auto mt-md-0">  
          <!-- Search -->
          <li>
            <div class="single-widget input-group mb-3 " id="mc_embed_signup">
              <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'" aria-label="Search" aria-describedby="searchBtn">
              <div class="input-group-append">
                <button class="click-btn btn btn-default" type="button" id="searchBtn">
                  <i class="ti-search" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </li>
        </ul>
  
        <!-- Signup and Menu itmes-->
        <ul class="navbar-nav my-lg-0">
            <!-- Menu Items -->
            <li class="nav-item "> 
                <button type="button" class="nav-link" data-toggle="modal" data-target="#addReview">
                  Review <i class="mdi mdi-message-processing navi"></i>
                </button>
            </li>
            <li class="nav-item "> 
              <a class="nav-link" href="{{ route('feed') }}"><span> Feed </span>  
                <i class="mdi mdi-clipboard-text navi"></i>
              </a>
            </li>

            <!-- Signup -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="{{ route('login') }}">
                <span class="user-name">Login</span>
                <i class="mdi mdi-account-circle navi"></i>
              </a>
            </li>
        </ul>
  
      </div>
    </nav>
  </header>

  @include('inc.addReview')