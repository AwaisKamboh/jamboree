<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proposal- Jamboree</title>
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
        ?>, as Event Worker!</a></li>
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
                        <a href="javascript:void(0)">Work Diary</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="my-active-orders.php">My Active Orders</a></li>
                            <li><a href="My-proposal.php">My Proposals</a></li>
                        </ul>
                    </li>
    
                    <li class="has-submenu">
                        <a href="javascript:void(0)">Payments</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="getpait.php">Get Paid</a></li>
                         
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
    <section class="bg-half page-next-level" style="background: url('images/web.jpg') center center;"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">New Proposal</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="home.php" class="text-uppercase font-weight-bold">Home</a></li>
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">Send A Proposal</span> 
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
                            <div class="row">
                            <div class="col-md-2">
                                <img src="images/icons/events.png" class="img-circle img-responsive" width="70%" >
                                </div>
                                
                                <?php
             include"connection.php";
             $user=implode($_SESSION["User"]);
             $id = isset($_GET['post_id']) ? $_GET['post_id'] : '';
             $sql= "SELECT * FROM `postevent` WHERE `id`='$id'";
            $result=mysqli_query($conn,$sql);

             if ($result->num_rows > 0) {
                                                        
        while($rows=mysqli_fetch_array($result))
             { ?>
            <div class="form-group app-label mt-2">
            <h4 class="text-dark mb-3"><?php echo  ucwords($rows['u_name']);?></h4>
                                        </div>
                            </div>
                           
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <h5 class="text-dark mb-3">Event Title:-</h5>
                                        </div> 
                                            <div class="form-group app-label mt-2">
                                            <h5 class="text-muted"><?php echo  ucwords($rows['event_title']);?>.</h5>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Description</label>
                                            <textarea disabled id="description" rows="6" class="form-control resume" placeholder=""><?php echo  ucwords($rows['event_descrip']);?></textarea>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Type:-</label>
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted"><?php echo  ucwords($rows['event_type']);?></label>
                                        </div>
                                        </div>
                                    </div>
                                 <div class="col-md-4">
                                     <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Location:-</label>
                                        </div>
                                         <div class="form-group app-label mt-2">
                                            <label class="text-muted"><?php echo ucwords($rows['location'].", ".$rows['city']);?></label>
                                        </div>
                                     </div>
                                       </div>
                                      <div class="col-md-4">
                                       <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Event Date:-</label>
                                        </div>
                                         <div class="form-group app-label mt-2">
                                            <label class="text-muted"><?php echo  ucwords($rows['event_date']);?></label>
                                        </div>
                                     </div>
                                    </div>
                                 
                              
                                </div>

                        

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                             <label class="text-muted">Minimum Budget:-</label>                                           
                                        </div>
                                            <div class="form-group app-label mt-2">                                             
                                            <label class="text-muted">Rs<?php echo  ucwords($rows['budgetmin']);?></label>
                                           
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Maximum Budget:-</label>                                            
                                        </div>
                                            <div class="form-group app-label mt-2">
                                            <label class="text-muted">Rs<?php echo  ucwords($rows['budgetmax']);?></label>                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
 <?php }} ?>
                                <div class="row">
                        
                                </div>
                                
                                <hr>
                                    <?php
                            include"connection.php";
                         $user=implode($_SESSION["User"]);

                        if(isset($_GET['submit']))
                        {
                            $url_id=$_GET['post-id'];
                         $sql= "SELECT * FROM `postevent` WHERE `id`='$url_id'";
                        $result=mysqli_query($conn,$sql);

                        if ($result->num_rows > 0) {

                        while($rows=mysqli_fetch_array($result))
                            { 
                                $loc = $rows['location'];
                                $city = $rows['city'];
                                $p_id = $rows['id']; 
                                $p_u_id = $rows['u_id']; 
                                $p_u_name = $rows['u_name']; 
                                $event_type = $rows['event_type']; 
                                $event_title = $rows['event_title']; 
                                $ev_descrip = $rows['event_descrip']; 
                                $location = $loc.", ".$city;
                                $date = date("Y-m-d");
                                $time = date("h:i:sa");
                            
                                
                             $sql2= "SELECT * FROM `users` WHERE `username`='$user'";
                            $result2=mysqli_query($conn,$sql2);
                      while($row=mysqli_fetch_array($result2))
                        {  
                            $pro_u_id = $row['id'];
                             $pro_u_name =$user;  
                      };

                           $bid = $_GET['bid'];
                            $pro_detail = $_GET['pro_detail'];
                                                                
                            $proposal="INSERT INTO proposal(`pro_u_id`, `pro_u_name`, `bid`, `pro_detail`, `event_type`, `event_title`, `ev_descrip`, `post_id`, `p_u_id`, `p_u_name`,`location`, `date`, `time`) VALUES  ('$pro_u_id','$pro_u_name','$bid','$pro_detail','$event_type','$event_title','$ev_descrip','$p_id','$p_u_id',' $p_u_name','$location','$date','$time')";
                             if($conn->query($proposal)===TRUE){
                              echo "<script>
                             location.href='home.php';
                             </script>";   
                            }
                             else
                                    {
                                         echo "fail";
                                       }

                         }}}

                                                                    ?>
                            
     <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="contact-form" id="contact-form3">
                                 
           <h4 class="text-dark mb-3">Fill Carefully :</h4>
                                
                    <div class="row">
                           <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">BID</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="Rs-8000" name="bid">
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Why are you valid of this job?</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder="Describe how will you be becneficial" name="pro_detail"></textarea>
                                        </div>
                                    </div>
                                </div>

                      <input type="hidden" value="<?php echo $_GET['post_id'] ?>" name="post-id">      

                 <div class="row">
                        <div class="col-lg-12 mt-2">
                   <input type="submit" class="btn btn-primary" name='submit' value="submit" >
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