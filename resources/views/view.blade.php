
<!doctype html>
<html>
<head>
<title>VIEW</title>  
    <link rel="stylesheet" href="css online shoping.css"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<style>
    

</style>   
</head>

    <body style="background:url(images/qam.jpg);background-repeat: no-repeat;
    background-size: cover;" >
        
        <h1 style="margin-left:35%;margin-top:10%; color:rgba(211, 188, 188, 0.51); font-family: 'Indie Flower', cursive; "><?php
        session_start();
        if($_SESSION["user"]==true){
        echo "Welcome"." ".$_SESSION["user"];
        }
        else{header('location:login.php');}
        ?> To Admin Panel</h1>
        <center>
        <div  style="width:400px;float:left;margin-left:15%;"><a href="admin33.php" style="color:white;float:left;margin-top:8% ;margin-left:10%;padding:4% 6%; background-color:rgba(4, 6, 59, 0.35);font-family: 'Indie Flower', cursive;font-size:250%;border:none;" class="btn btn-info">View Users Record</a></div>
            
        <div style="width:400px;float:left;margin-left:10%;"><a href="postedevents.php" style="color:white;float:right;margin-top:8%;margin-right:10%;padding:4% 6%; background-color:rgba(4, 6, 59, 0.35);font-family: 'Indie Flower', cursive;font-size:250%;border:none;" class="btn btn-info">View Posted Events</a></div>
            <div style="clear: both;"></div>
         </center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
        <a href="logout.php"> <button style="height:60px;width:110px;color: white;background-color:#000000a3;border-color:black;border-radius:5px;">Log out</button></a>
         </center>
    </body>


</html>