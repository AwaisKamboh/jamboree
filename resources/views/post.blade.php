<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bid - Jamboree Project</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Class Project" />

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

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
                            <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i><?php
        session_start();
       if($_SESSION["User"]==true){
        echo implode($_SESSION["User"]);
             }
        else{
            header('location:login.php');
        }
        ?> as Event Seeker!</a></li>
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
                    <a href="index.php" class="logo">
                        <img src="images/logo9.png" alt="" class="logo-light" width="100px" />
                    <img src="images/logo10.png" alt="" class="logo-dark" width="100px" />
                    </a>
                </div>                 
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
                            <li><a href="home.php">Home</a></li>
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
                        </ul><!--end navigation menu-->
                    </div><!--end navigation-->
                </div><!--end container-->
                <!--end end-->
            </header><!--end header-->
            <!-- Navbar End -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level" style="background: url('images/bidding.jpeg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">BIDS</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Poste An Event</span> 
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
  <!-- all jobs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">BIDS </h4>
                    </div>
                </div>
            </div>
           <?php
                                                        include"connection.php";
                                                        $user=implode($_SESSION["User"]);
                                                        $email=$_SESSION["email"];
                                                        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'") or die("Error: " . mysqli_error($conn));                        
                                                        $row=mysqli_fetch_array($query); 
                                                        $id=$row["id"];
                                                        $sql= "SELECT * FROM `proposal` WHERE `p_u_id`='$id'";
                                                        
                                                        $result=mysqli_query($conn,$sql);

                                                        if ($result->num_rows > 0) {
                                                        
                                                        while($rows=mysqli_fetch_array($result))
                                                        { $id=$rows['id'];
                                                         
                                                  echo'
            <div class="row">
                <div class="col-12">
                    <div class="tab-content mt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                        <div class="lable text-center pt-2 pb-2">
                                            <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                                <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="p-4">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="mo-mb-2">
                                                        <img src="images/icons/bid.png" alt="" class="img-fluid mx-auto d-block">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <h5 class="f-18"><a href="#" class="text-dark">Bid by: ';
                                                                                                                 echo  ucwords($rows['pro_u_name']);
                                                                                                                       echo '</a></h5>
                                                       
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-4">
                                                    <div>
                                                        <h6 >Offer <span class="text-primary">Rs</span>'; echo $rows['bid']; echo '</h6>
                                                    </div>
                                                </div>
                                               <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label >Event Title:-</label>
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted">';
                                                                             echo  ucwords($rows['event_title']);
                                                                            echo '</label>
                                        </div>
                                        </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <center>
                                        <div class="col-md-6">
                                                    <div>
                                                    
                                                        <h6>Details </h6>
                                                        <hr>
                                                        <p>';
                                                                             echo  ucwords($rows['pro_detail']);
                                                                            echo '</p> 
                                                                            <hr>
                                                    </div>
                                                </div>
                                        </center>
                                        <div class="p-3 bg-light " >
                                            <div class="row justify-content-center ">
                                                <div class="col-md-4">
                                                    <div>
                                                       <p>Bid on Date:'; echo $rows['date']." Time:".$rows['time']; ;echo'</p>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2">
                                                    <div>';
                                                      echo "  <a href='newpost.php?hire_id=$rows[id]' class="text-primary">Message <i class="mdi mdi-chevron-double-right"></i></a>";
                                                  echo '  </div>
                                                </div>
                                                 <div class="col-md-2">
                                                    <div>
                                                        ';
                                                  echo "<a href='employeedinner.php?hire_id=$rows[id]' class='text-primary' name='bid'>Hire <i class='mdi mdi-chevron-double-right'></i></a>";
                                                    echo '
                                                     </div>
                                                     
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                    

                                </div>
                            </div>
                        </div>
                       
                                           
                            <!-- end row -->
                        </div>
                    </div>
                </div>';

                                                        
}}//end of if
?>
            </div>
            <!-- end row -->

            <!-- end row -->
          
           
        <!-- end containar -->
    </section>

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
    
        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/plugins.js"></script>
    
        <!-- selectize js -->
        <script src="js/selectize.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
    
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/counter.int.js"></script>
    
        <script src="js/app.js"></script>
        <script src="js/home.js"></script>
    
    </body>
    </html>