<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Message - Jamboree Project</title>
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
    <script src="bootstrap/js/bootstrap.min.js"></script>
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
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
       session_start();
       if($_SESSION["User"]==true){
        
             }
        else{
            header('location:login.php');
        }
?>
<style>
*{margin:0px; padding:0px;font-family: Helvetica, Arial, sans-serif;}

#result-wrapper{width:100%; margin:auto; height:450px;}
#result{height:450px; overflow:scroll;overflow-x: hidden;}

#form-container{width:100%; margin:auto; height:80px;}
.form-text{float:left; width:85%; height:80px;}
#comment{width:100%; height:60px; resize:none;}
.form-btn{float:left; width:15%; height:80px;}
#btn{border:none; height:60px; width:80%; margin-left: 2%; color:#fff; font-size:22px,}

.chats{width:100%; margin-bottom:6px;}
.chats strong{color:#6d84b4}
.chats p{ font-size:14px; color:#aaa; margin-right:10px}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>
    <header id="topnav" class="defaultscroll scroll-active bg-success" >
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Welcome, <?php
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


<div class="row" style="margin-top:200px;">
    <div class="container col-md-10 col-sm-12 rounded shadow bg-white p-4 bg-success" >
        
        
        <div class="col-md-2 float-left"  style="margin-bottom:-40px;"> 
            
            <button type="button" class=" btn btn btn-primary" data-toggle="modal" data-target="#new_message"  >Create new message</button>
                            
                <div  id="new_message" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" >
                
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 style="margin-left:35%">New Message</h4>
                     <button class="close" data-dismiss="modal">&times;</button>
                    </div>                    
                    <div class="modal-body ">
                       
     
                       <form method="POST" action="#" align="center">
                        <div class="title">
                        <input type="text" list="user" onkeyup="check_in_db()" placeholder="username" name="user_name" required id="user_name" style="width: 100%; height: 30px">
                            <datalist id="user"></datalist>
                            <br><br>

                           
                            <textarea style="width: 100%; height: 100px" placeholder="type your message..." name="message" required></textarea></div>
                        
                  <input  style="float:right ;margin-right:" class="btn btn-primary btn-md " type="submit" value="Send" name="send" id="send">
                                           
           </form>

                    </div>
             <div class="modal-footer bg-primary" >
                    <h6>Click send to send</h6>
                </div>
                    
            </div>
            </div>
        </div>
           </div>
        <!-- end of new message-->
        <?php
        include_once("connection.php");
        if(isset($_POST['send'])){
            $sender_name = implode($_SESSION["User"]);
            $reciever_name = $_POST['user_name'];
            $message = $_POST['message'];
            $date =date("Y-m-d h:i:sa");
            $sql="INSERT INTO `messages` (`sender_name`, `reciever_name`, `message`, `date_time`) VALUES ('$sender_name','$reciever_name','$message','$date')";
            $res= mysqli_query($conn,$sql);
            if($res){
                echo 
            "<script>
            location.href='chat.php?user=$reciever_name';
            </script>";  
            }
            else{
                echo $sql;
            }
        }
        ?>
        
        
            <script src="bootstrap/js/jquery-3.5.1.min.js"> </script>
            <script>
                 document.getElementById("send").disabled = true;
            function check_in_db(){
                var user_name=document.getElementById("user_name").value;
                $.post("check_in_db.php",
                      {
                        user:user_name
                        },
                       function (data, status){
//                   alert(data);
                    if(data == '<option value="no user">'){
                        document.getElementById("send").disabled = true;
                    }
                    else{
                        document.getElementById("send").disabled = false;
                    }
                    document.getElementById('user').innerHTML= data;
                }
                      );
            }
            </script>
        
        
        
        
        
        
        <div style="clear:both"></div>
    <?php include_once("left-col-container.php")?>
        <!-- end of left colum-->
        
        <?php include_once("right-col-container.php")?>
        
        

    </div>
    </div>

</body>
</html>