    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->
  
    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-right">
                    @auth
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>
                        {{Auth::user()->name}}, as Event Seeker!</a></li>
                    </ul>
                    @endauth
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="home.php" class="logo">
                    <img src="/assets/images/logo9.png" alt="" class="logo-light" width="100px" />
                    <img src="/assets/images/logo10.png" alt="" class="logo-dark" width="100px" />
                </a>
            </div>                 
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="/">Home</a></li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">My Events</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="/posted_event">My Posted Events</a></li>
                                <li><a href="active_event">My Active Events</a></li>
                                 <li><a href="/my_bid">Bids On My Events</a></li>
                             
                            </ul>
                        </li>
        
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Payments</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="/payments">Pay Event Workers</a></li>
                                <li><a href="#">Payment History</a></li>
                             
                            </ul>
                        </li>
                        <li class="has-submenu">
                                <a href="javascript:void(0)">Account</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                    <li class="has-submenu"><a href="javascript:void(0)"> Settings</a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="/user_profile">Profile</a></li>
                                            <li><a href="#">Messages</a></li>
                                        </ul>  
                                    </li>
                                    <li><a href="/logout">Logout</a></li>
                                 
                            </ul>
                        </li>
                       
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
            <!--end end-->
        </header><!--end header-->
        <!-- Navbar End -->