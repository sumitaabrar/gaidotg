<!-- Left Sidebar - style you can find in sidebar.scss  -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if (!Auth::guest())    <!--Show User Profile link only to signed in user-->
                   <li> 
                       <a class="waves-effect waves-dark" href="{{ route('brand.dashboard') }}" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Your Profile</span></a>
                    </li> 
                @endif

                <li>
                    <a class="waves-effect waves-dark" href="{{ route('brand.report') }}" aria-expanded="false"><i class="mdi mdi-message-processing"></i><span class="hide-menu">View Report</span></a>
                </li>

                <li> 
                    <a class="waves-effect waves-dark" href="#annModal" data-toggle="modal" aria-expanded="false"><i class="mdi mdi-directions"></i><span class="hide-menu">Announcements</span></a>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->


    <!-- Bottom points-->
    <!--Show these only to signed in user-->
    @if (!Auth::guest())
        <div class="sidebar-footer">
            <a href="{{ route('brand.dashboard') }}" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            
            <a class="link" data-toggle="tooltip" title="Logout" href="{{ route('brand.logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-power"></i>
            </a>
            <form id="logout-form" action="{{ route('brand.logout') }}" method="POST" style="display: none;">
                @csrf
            </form> 
        </div>
    @endif
    <!-- End Bottom points-->
</aside>
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
























<!--<div class="primary-nav"> 
    <nav role="navigation" class="menu">
        <div class="overflow-container">
        <ul class="menu-dropdown">
            <li><a href="#">Dashboard</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>
            <li class="menu-hasdropdown">
            <a href="#">Social</a>
            <span class="icon"><i class="fa fa-share-alt"></i></span>
            <label title="toggle menu" for="settings"> 
                <span class="downarrow"><i class="fa fa-caret-down"></i></span> 
            </label>
            <input type="checkbox" class="sub-menu-checkbox" id="settings" />
            <ul class="sub-menu-dropdown">
                <li><a href="https://www.facebook.com">Facebook</a></li>
                <li><a href="https://www.facebook.com">Twitter</a></li>
                <li><a href="https://www.facebook.com">Instagram</a></li>
            </ul>
            </li>
            <li><a href="#">Settings</a><span class="icon"><i class="fa fa-gear"></i></span></li>
            <li><a href="#">Messages</a><span class="icon"><i class="fa fa-envelope"></i></span></li>
        </ul>
        </div>
    </nav>
</div>-->