<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF-8">
    <title>KINGSMEN</title>
    
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
     <style>
        body{background-image: url(image/BGadmin.jpg);background-repeat: no-repeat;
    background-size: cover;}
        table{width: 100%;}
        table, th, td {background-color: rgba(0, 0, 0, 0.36);color: white;margin-top: 0%;border-bottom: 5px solid black;border-collapse: collapse;}  
        th, td{text-align: center;padding: 5px;}
        th{font-size: 150%;background-color: rgba(2, 8, 74, 0.31);padding: 0.7%;}
        #edit{background-color: rgba(4, 82, 34, 0.5);border:none;}
        #del{background-color: rgba(132, 4, 39, 0.42);border:none;}
        td:hover{background-color: rgba(2, 2, 59, 0.19);}
         #inp{border: none; background-color: rgba(1, 20, 36, 0.69);}
    </style>
</head>
    <body>
        <nav class="navbar navbar-default " style="background-color:rgba(0, 0, 0, 0.86);" >
    <div class="container-fluid">
    <div class=" navbar-header">
    <h1 style="color: white"><a><img src="image/logo.png" width="30%"></a></h1>
    </div>
    <ul style="margin: 0% 2% 0% 0% " class="nav navbar-nav navbar-right ">
           <!-- FAQ in modal end -->  
            <li><a href="sign_in.php" ><h4 type="button" style="margin-top:25%;font-size:180% ">LogOut</h4></a></li>
            </ul> 
            </div>   
            </nav>
        <div class="container">
        <div style="margin-left:40%; color:rgba(211, 188, 188, 0.51); font-family: 'Indie Flower', cursive; ">
            <h1><b>Admin Panel</b></h1>
            </div>
    
            <h2 style="color:rgba(211, 188, 188, 0.51);">Insert Data</h2>
            <form class="col-md-4" method="POST">      
                
                <div class="form-group">
                <label style="color:rgba(211, 188, 188, 0.51);">Name</label>
                    <input id="inp" type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                <label style="color:rgba(211, 188, 188, 0.51);">Email</label>
                    <input id="inp" type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                <label style="color:rgba(211, 188, 188, 0.51);">Password</label>
                    <input id="inp" type="password" name="password" class="form-control" required>
                </div>
               
               
                <div class="form-group">
            
                    <input type="submit" name="submit_user" class="btn btn-info">
                </div>
            </form> 
            
   <?php       
    include_once("connection.php");
        $sql="SELECT *  FROM `signin`";
        $run=mysqli_query($conn, $sql);
            echo "
                    <table>
                            <thead>
                                    tr>
                                        <th>Srno.</th>
                                        <th>User_name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Delete</th>
                                    </tr>
                            </thead>
                            <tbody>
                                   ";
                                        while($rows= mysqli_fetch_assoc($run)) {
                                      echo     " <tr>
                                                    <td>$rows[id]</td>
                                                    <td>$rows[user_name]</td>
                                                    <td>$rows[Email]</td>
                                                    <td>$rows[password]</td>
                                                    

<td><a href='useradmin.php?del_id=$rows[id]' class='btn btn-danger'>Delete</a>
                                                    </td>
                                                    
                                                    
                                                    
                                                </tr>";
                                        }
                                        echo "</tbody>
                                            </table>";
        ?>
        </div>
    </body>
</html>

<?php
    //insert
    if(isset($_POST['submit_user'])) {
    
    $name= mysqli_real_escape_string($conn, strip_tags($_POST['name']));
    $email= mysqli_real_escape_string($conn, strip_tags($_POST['email']));
    $pass= mysqli_real_escape_string($conn, strip_tags($_POST['password']));
   
    $ins_sql="INSERT INTO `signin`( `user_name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    if(mysqli_query ($conn, $ins_sql)){ ?>
<script> window.location="useradmin.php";</script>
<?php }
}
//delete user
if (isset($_GET['del_id'])){
    $del_sql="DELETE FROM `signin` WHERE `id`='$_GET[del_id]'";
    if(mysqli_query($conn, $del_sql)) { ?>
<script>window.location="useradmin.php";</script>
<?php }
}

?>
