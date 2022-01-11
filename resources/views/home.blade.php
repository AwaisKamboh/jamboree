@auth
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events Market Place - Jamboree</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Class Project" />

    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/selectize.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.css" />
    <link rel="stylesheet" href="/assets/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />

</head>

<body>
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
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Welcome, {{Auth::user()->name}}</a></li></a></li>
                    </ul>
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
            <div class="buy-button">
                <a href="/event-seeker/post-event" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post an Event</a>
            </div><!--end login button-->
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
                    <li><a href="/home">Home</a></li>
                    <li><a href="/event-seeker">Event Seeker</a></li>
                    <li><a href="/event-worker">Event Worker</a></li>
                    <li class="has-submenu">
                                <a href="javascript:void(0)">Account</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                    <li class="has-submenu"><a href="javascript:void(0)"> Settings</a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="/profile">Profile</a></li>
                                            <li><a href="/chat">Messages</a></li>
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

    <!-- Start Home -->
    <section class="bg-home" style="background: url('/assets/images/event-plans.png') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h6 class="small-title text-uppercase text-light mb-3">Create events & hire professionals for management.</h6>
                                <h1 class="heading font-weight-bold mb-4">Get your Event Done.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- popular category start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Popular Event Categories</h4>
                        <p class="text-muted para-desc mx-auto mb-1">Post an event with relevant information and we will quickly show you some of the best Event Planners available across your area.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-account d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Marriage</h5>
                                <p class="text-success mb-0 rounded">290 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-desktop-classic d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Birthday</h5>
                                <p class="text-success mb-0 rounded">77 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-bank d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Anniversary</h5>
                                <p class="text-success mb-0 rounded">90 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <i class="mdi mdi-auto-fix d-inline-block rounded-pill h3 text-primary"></i>
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Customized Events</h5>
                                <p class="text-success mb-0 rounded">930 Events</p>
                            </div>
                        </div>
                    </a>
                </div>
               
            </div>

            <div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    <a href="event-workers-homepage.php" class="btn btn-primary-outline">Browse All Posted Events <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- popular category end -->

    <!-- How it Work start -->
    <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title title-line pb-5">How Jamboree Works</h4>
                            <p class="text-muted para-desc mx-auto mb-1">Post your desired event details and get your work done.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                            <div class="how-it-work-img position-relative rounded-pill mb-3">
                                <img src="/assets/images/how-it-work/img-3.png" alt="" class="mx-auto d-block" height="50">
                            </div>
                            <div>
                                <h5>Get Work Done</h5>
                                <p class="text-muted">Once you are a part of Jamboree, you can get your events done quickly.</p>
                                <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it Work end -->
    
        <!-- counter start -->
        <section class="section bg-counter position-relative" style="background: url('https://via.placeholder.com/200X700//88929f/5a6270C/O https://placeholder.com/') center center;">
            <div class="bg-overlay bg-overlay-gradient"></div>
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-bank h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="350">10</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Event Seekers</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-file-document-box h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="600">80</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Events Listed</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="750">10</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Event Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="home-counter pt-4 pb-4">
                            <div class="float-left counter-icon mr-3">
                                <i class="mdi mdi-account-multiple-plus h1 text-white"></i>
                            </div>
                            <div class="counter-content overflow-hidden">
                                <h1 class="counter-value text-white mb-1" data-count="1200">10</h1>
                                <p class="counter-name text-white text-uppercase mb-0">Community Members</p>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
        <!-- counter end -->
    

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
    
            <!-- Any content in footer for users -->
               
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2021 Jamboree Version 0.1.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
        <!-- Back to top -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/jquery.easing.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        
        <!-- selectize js -->
        <script src="/assets/js/selectize.min.js"></script>
        <script src="/assets/js/jquery.nice-select.min.js"></script>
        
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/counter.int.js"></script>
        
        <script src="/assets/js/app.js"></script>
        <script src="/assets/js/home.js"></script>

</body>
</html>
@else 
{{"not login"}}
@endauth