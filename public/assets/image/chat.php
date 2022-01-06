<!doctype html>
<html>
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
#logout{width:60px; height:20px; position:absolute; top:6px; right:20px; margin-bottom:40px; text-align:center; color:#fff}
#container{width:75%; height:auto; position:relative; top:8px; margin:auto;}

#session-name{width:100%; height:36px; margin-bottom:30px; font-size:20px}
.session-text{width:300px; height:30px;padding:6px 10px;margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box; font-size:24px}

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
<script>
$(document).ready(function()
    {
        $(document).bind('keypress', function(e) {
            if(e.keyCode==13){
                 $('#my_form').submit();
				 $('#comment').val("");
             }
        });
	});
</script>
<script type="text/javascript">
function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'commentajax.php',
      data: 
      {
         user_comm:comment,
	     user_name:name
      },
      success: function (response) 
      {
	    document.getElementById("comment").value="";
      }
    });
  }
  
  return false;
}
</script>
<script>
 function autoRefresh_div()
 {
      $("#result").load("load.php").show();// a function which will load data from other file after x seconds
  }
 
  setInterval('autoRefresh_div()', 2000);
</script>
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
<div id="logout">
	<a href="logout.php" style="text-decoration:none"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
</div>

<div id="container" style="margin-top:200px;" class="rounded shadow bg-white p-4"
>

<div id="session-name">
    <?php 
    $name=$_SESSION['User'];
	echo 'Name: <input type="text" value="';echo implode($name); echo'" class="session-text" disabled>';?>
</div>

<div id="result-wrapper">
	<div id="result">
		<?php
			include("load.php");
		?>
	</div>			
</div>

<form method='post' action="#" onsubmit="return post();" id="my_form" name="my_form">
<div id="form-container">
	<div class="form-text">
        
    	<input type="text" style="display:none" id="username" value="<?php echo implode($_SESSION['User']); ?>">
    	<textarea id="comment"></textarea>
    </div>
    <div class="form-btn">
    	<input   class="rounded bg-primary "
  type="submit" value="Send" id="btn" name="btn" />
    </div>
</div>
</form>

</div>
</body>
</html>