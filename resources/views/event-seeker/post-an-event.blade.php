@extends('main.layout')
@section('title')
    {{"Jamboree | Post-Event"}}
@endsection
@section('content')
<!-- Loader -->
@include('includes.header')
    <!-- Navigation Bar-->

            <!-- Tagline End -->
    
            <!-- Menu Start -->
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="/" class="logo">
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
                                    <li><a href="My-post-event.php">My Posted Events</a></li>
                                    <li><a href="my-active-event.php">My Active Events</a></li>
                                    <li><a href="bid.php">Bids On My Events</a></li>
                                 
                                </ul>
                            </li>
            
                            <li class="has-submenu">
                                <a href="javascript:void(0)">Payments</a><span class="menu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="payment.php">Pay Event Workers</a></li>
                                 
                                </ul>
                            </li>
                            <li class="has-submenu">
                                    <a href="javascript:void(0)">Account</a><span class="menu-arrow"></span>
                                <ul class="submenu">
                                        <li class="has-submenu"><a href="javascript:void(0)"> Settings</a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="profile.php">Profile</a></li>
                                                <li><a href="chat.php">Messages</a></li>
                                            </ul>  
                                        </li>
                                        <li><a href="logout.php">Logout</a></li>
                                     
                                </ul>
                            </li>
                            <li>
                            </li>
                        </ul><!--end navigation menu-->
                    </div><!--end navigation-->
                </div><!--end container-->
                <!--end end-->
            </header><!--end header-->
            <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('/assets/images/post-events.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Create A new Job</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="/" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Post A Job</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            
                              {{-- <?php
                                    
                                    include_once("connection.php");
                            date_default_timezone_set('Asia/Karachi');
                            
                                    if(isset($_GET['postevent']))
                                        {    
                                        $user=implode($_SESSION["User"]);
                                        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$user'") or die("Error: " . mysqli_error($conn));                        
                                        $row=mysqli_fetch_array($query); 
                                        $id=$row["id"];
                                        $event_title=$_GET['event_title'];
                                        $event_type=$_GET['event_type'];
                                        $city=$_GET['city'];
                                        $location=$_GET['location'];
                                        $budgetmin=$_GET['budgetmin'];
                                        $budgetmax=$_GET['budgetmax'];
                                        $event_date=$_GET['date'];
                                        $event_descrip=$_GET['description'];
                                        $currentdate= date("Y-m-d");
                                        $currenttime=date("h:i:sa");
                                        
                                      $sql="INSERT INTO `postevent`(`u_id`, `u_name`, `event_title`, `event_type`, `city`, `location`, `budgetmin`, `budgetmax`, `event_date`, `event_descrip`,`currentdate`, `currenttime`) VALUES ('$id','$user','$event_title',' $event_type','$city',' $location','$budgetmin','$budgetmax','$event_date','$event_descrip','$currentdate','$currenttime')";
                                        if($conn->query($sql)===TRUE){
                                             echo "<script>
                                            location.href='post-an-event.php';
                                            alert('Event posted');
                                            </script>";   
                                             }
                                        else
                                        {
                                            echo "<script>
                                            location.href='post-an-event.php';
                                            alert('Event not posted');
                                            </script>"; 
                                        }

                                    }
                                     ?> --}}
                            
                            
                            
                            <form method="GET" action="#" name="contact-form" id="contact-form3">
                                <h4 class="text-dark mb-3">Post a New Event :</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Title</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="" name="event_title" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Type</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded" name="event_type" required>
                                                    <option data-display="Job Type">Event Type</option>
                                                    <option value="anniversary">Anniversary </option>
                                                    <option value="birthday">Birthday</option>
                                                    <option value="custom">Custom</option>
                                                    <option value="marriage">Marriage</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                 
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">City</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Location</label>
                                             <input id="Location" type="text" class="form-control resume" placeholder="" name="location" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Minimum Budget</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="Rs-8000" name="budgetmin" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Budget</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="Rs-20000" name="budgetmax" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   

                                   
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Date</label>
                                            <input type="date" class="form-control resume" placeholder="d/m/y" name="date" required>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Description</label>
                                            <textarea name="description" rows="6" class="form-control resume" placeholder="Add some details" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <button class="btn btn-primary" name="postevent">Post event</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A EVENT END -->

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
                            <p class="mb-0">© 2021 EVMart Version 0.1.</p>
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
        @endsection