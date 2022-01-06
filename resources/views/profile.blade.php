<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events Market Place - EVMart Project</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Class Project" />

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.cycle.all.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <scripy src="bootstrap/js/bootstrap.min.js"></scripy>
    <script src="bootstrap/js/npm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
        $(document).ready(function(){
                          $('[data-toggle="tooltip"]').tooltip();
                          $('[data-toggle="popover"]').popover();
                          });
    </script>
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
    <header id="topnav" class="defaultscroll scroll-active bg-success" >
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Welcome, <?php
        session_start();
       if($_SESSION["User"]==true){
        echo ucwords(implode($_SESSION["User"]));
             }
        else{
            header('location:login.php');
        }
        ?></a></li>
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
            <div class="buy-button">
                <a href="post-an-event.php" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post an Event</a>
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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="event-seeker-homepage.php">Event Seeker</a></li>
                    <li><a href="event-workers-homepage.php">Event Worker</a></li>
                    
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

    <!-- Start Home -->

    <section class="bg-home" style="background: url('images/p4.JPEG') center center;margin-top:-150px">
            <?php
include"connection.php";
        $user=implode($_SESSION["User"]);
        
$sql= "SELECT * FROM `users` WHERE `username` = '$user'";
$result=mysqli_query($conn,$sql);
        
if ($result->num_rows > 0) {
while($rows=mysqli_fetch_array($result))
{
?>
        <div class="row">
        <div class="well col-md-8" style="margin-left: 20%;margin-top: 5%" >
        <div class="col-md-3" style="float: left;">
            <?php
                
                if(empty($rows["image"]) && $rows["gender"] == 'male'){ ?>
                    <a href="profile.php?id=<?php echo $rows['id']; ?>" ><img src="images/how-it-work/avtar.png" class="img-circle img-responsive" width="100%"></a>
            <?php
                }elseif(empty($rows["image"])&& $rows["gender"] == 'female'){ ?>
                     <a href="profile.php?id=<?php echo $rows['id']; ?>" ><img src="images/how-it-work/favtar.png" class="img-circle img-responsive" width="100%"></a>
               <?php } 
                else{ ?>
                     <a href="profile.php?id=<?php echo $rows['id']; ?>" ><img src="test_files/<?php echo $rows["image"] ?>" class="img-circle img-responsive" width="100%"></a>
               <?php } ?>
            
          
            <button class="btn btn-danger" data-toggle="modal" data-target="#myModal_upload"  style="margin-left: 50px;margin-top: 5px;" name="submitp">Upload Image</button>
            <div  id="myModal_upload" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" >
                
                <div class="modal-dialog">
                
                <div class="modal-content">
                   
                    <div class="modal-header ">
                   <h2 style="text-align: center"> select image</h2>    
                        <button class="close" data-dismiss="modal">&times;</button>
                   
                    </div>
                    <div class="modal-body">
                    <a href="profile.php?id=<?php echo $rows['id']; ?>" ><img src="test_files/<?php echo $rows["image"] ?>" class="img-thumbnail img-responsive" width="50%"></a>
                    </div>

             <div class="modal-footer" >
                    <form method="POST" action="uploadprofilepic.php" enctype="multipart/form-data">
                         <div class="form-group">
                       <label>image </label>
                       <input type="file" class="form-control" name="image"  value="<?php echo $row['image']; ?>">
                      </div>
                     <button class="btn btn-info" name="submit" >Upload</button>
                 </form>
                </div>
                    
            </div>
            </div>
        </div>
               
                
            </div>
            <div style="float: left;"> <h1><?php echo ucwords($rows['fname']." ".$rows['lname']) ?></h1>            
            <span class="glyphicon glyphicon-home"></span> <?php echo ucwords($rows['address'])?>
            </div>
            <div style="clear: both"></div>
            <div style="float: left" class="container">
                <div class="col-md-6" style="margin-left: 20%;margin-top: 2%">
                     
                     
<!--                    1 panel-->
                        <div class="panel panel-default">
                            
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%">Edit your title</h3> 
                            <button style="float:left" type="button" class="glyphicon glyphicon-edit btn btn btn-info" data-toggle="modal" data-target="#myModal_title" title="Edit"  ></button>
                            
             <div  id="myModal_title" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" >
                
                <div class="modal-dialog">
                
                <div class="modal-content">
                   
                    <div class="modal-header ">
                        <h2 style="text-align: center"> Heading tittle</h2>
                     <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <div class="modal-body  ">
                        
     
                       <form method="GET" action="uploadprofilepic.php" >
                        <div class="title">
                            <textarea style="width: 80%; height: 20%;" placeholder="Title" name="title" ><?php echo ucfirst($rows['title'])?></textarea></div>
                        
                           <input  style="float:right ;margin-right: 10% " class="btn btn-info btn-md " type="submit" value="Save" name="submit">
                                 <div class="clearfix"></div>            
                        </form>
                       
                    </div>
             <div class="modal-footer" >
                    
                </div>
                    
            </div>
            </div>
        </div></div>             
                            
    <div class="panel-body "  style="height: 100%;">
                        <h3><?php echo ucfirst($rows['title'])?></h3>
                            </div>
                        </div>
                    
<!--                    2nd panel-->
                    
                    <div class="panel panel-default">
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%">Overview</h3>
                            <button style="float:left" type="button" class="glyphicon glyphicon-edit btn btn btn-info" data-toggle="modal" data-target="#myModal_overview"  ></button>
                            
                            <div  id="myModal_overview" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" >
                
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h2 style="text-align: center"> Overview</h2>
                     <button class="close" data-dismiss="modal">&times;</button>
                    </div>                    
                    <div class="modal-body  ">
                        <h4>Use this space to show clients you have the skills and experience they're looking for. 
                        <ul><li>Describe your strengths and skills</li>
                            <li>Highlight projects, accomplishments and education</li>
                            <li>Keep it short and make sure it's error-free</li></ul>
                        </h4>
     
                       <form method="GET" action="descriptioninner.php" >
                        <div class="title">
                            <textarea style="width: 80%; height: 20%" placeholder="add your Description" name="description"><?php echo ucfirst($rows['description'])?></textarea></div>
                        
                  <input  style="float:right ;margin-right: 10% " class="btn btn-info btn-md " type="submit" value="Save" name="submit">
                                 <div class="clearfix"></div>            
           </form>

                    </div>
             <div class="modal-footer" >
                    
                </div>
                    
            </div>
            </div>
        </div></div>
                        <div class="panel-body "  style="height: 100%">
                        <p><?php echo ucfirst($rows['description'])?></p>
                         
                            </div>
                       
                        </div>
                        </div>
               
                
            </div>
        </div>
        
        <div class="well col-md-8" style="margin-left: 20%;margin-top: 1%" >
            
             <div style="float: left" class="container">
                 
                <div class="col-md-6" style="margin-left: 20%;margin-top: 2%">
                    
                    
<!--                        3 panel-->
                          <div class="panel panel-default">
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%"> Skills</h3>
                            <button style="float:left" type="button" class="glyphicon glyphicon-edit btn btn btn-info" data-toggle="modal" data-target="#myModal_skills"  ></button>
                            
                            <div  id="myModal_skills" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" >
                
                <div class="modal-dialog">
                <div class="modal-content">
                   
                    <div class="modal-header ">
                    <h2 style="text-align: center">My skills</h2>
                     <button class="close" data-dismiss="modal">&times;</button>      
                    </div>
                    
                    <div class="modal-body  ">
                        
                       <form method="GET" action="descriptioninner.php" >
                        <div class="title">
                             <textarea style="width: 80%; height: 20%" placeholder="add your Skills with ," name="skill"><?php echo ucfirst($rows['skills'])?></textarea></div>
                        
                  <input  style="float:right ;margin-right: 10% " class="btn btn-info btn-md " type="submit" value="Save" name="sub">
                                 <div class="clearfix"></div>            
           </form>
                       
                        
                    </div>
             <div class="modal-footer" >
                    
                </div>
                    
            </div>
            </div>
        </div></div>
                        <div class="panel-body "  style="height: 100%">
                                <p><?php echo ucfirst($rows['skills'])?></p>
                            </div>
 <?php
}}//end of if
?>
                        </div>
                 
<!--                 4 panel-->

                     <div class="panel panel-default">
                        <div style="float: left ;width: 100%" class="panel-heading">
                            <h3  style="float: left ;margin-right: 5%">Portfolio</h3>
                            <button style="float:left" type="button" class="glyphicon glyphicon-edit btn btn btn-info" data-toggle="modal" data-target="#myModal_portfolio"  ></button>
                            
                            <div  id="myModal_portfolio" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" >
                
                <div class="modal-dialog">
                
                <div class="modal-content">
                   
                    <div class="modal-header ">
                   <h2 style="text-align: center">Add some Photos from previous Events</h2>    
                        <button class="close" data-dismiss="modal">&times;</button>
                   
                    </div>
                 

             <div class="modal-footer" >
                    <form  method="POST" action="portfolioinner.php" enctype="multipart/form-data">
                         <div class="form-group">
                       <label>Description</label>
                       <input type="text" class="form-control" name="description" >
                      </div>
                          <div class="form-group">
                       <label>image </label>
                       <input type="file" class="form-control" name="image"  value="<?php echo $row['image']; ?>">
                      </div>
                        
                     <button class="btn btn-info" name="sub" >Upload</button>
                 </form>
                </div>
                    
            </div>
            </div>
        </div></div>
                        <div class="panel-body "  style="height: 100%">
                            <?php       
    include_once("connection.php");
    $user=implode($_SESSION["User"]);
    $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `username`='$user'") or die("Error: " . mysqli_error($conn));                        
    $row=mysqli_fetch_array($query); 
    $id=$row["id"];                      
        $sql="SELECT * FROM `portfolio` WHERE `u_id`= '$id'";
        $run=mysqli_query($conn, $sql);
                    while($rows= mysqli_fetch_array($run)) {
                            $pic_id =$rows['id'];
                            
                            ?>
                            <div class="row">
                            <div style="background-color:;" class="col-md-7"><figure class="figure"> 
                           <a href="profile.php?id=<?php echo $rows['id']; ?>" ><img src="test_files/<?php echo $rows["image"] ?>" class="figure-img img-thumbnail img-responsive" width="100%"></a> 
                                <figcaption class="figure-caption"><a href='profile.php?del_id=<?php echo $pic_id; ?>' class="btn btn-danger" style="margin:5px" >Remove Image</a></figcaption>
                               
                            </figure>
                           </div>
                             <div style="background-color:;" class="col-md-5">
                            <h3><u>Description:</u></h3>
                                 <h4><?php echo ucfirst($rows["description"]) ?> </h4>
                            </div>
                            </div>
                            <hr>
                          
<?php
}//end of if

          
                if(isset($_GET['del_id'])){
                    $del_id= $_GET['del_id'];
                  $del_sql="DELETE FROM `portfolio` WHERE `id`= '$del_id'";
                      
                        if(mysqli_query($conn, $del_sql)){
                           echo "<script>
                           window.location='profile.php';</script>";
                        } else {
                                echo "<script>alert('Failed')</script>";
                        }
                }          
                            ?>                  
                            
    
                  
                         
                            </div>
                       
                        </div>
                 </div>

                 
                 
                </div>
            </div>
        </div>
        </section>
 
        <!-- counter end -->
    
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