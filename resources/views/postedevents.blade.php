@extends('main.layout')
@section('title')
    {{"Jamboree | Home"}}
@endsection
@section('content') 
    
        <style>
        
        body{background-image: url(/assets/images/BGadmin.jpg);background-repeat: no-repeat;
    background-size: cover;}
        table{width: 100%;}
        table, th, td {background-color: rgba(0, 0, 0, 0.36);color: white;margin-top: 0%;border-bottom: 5px solid black;border-collapse: collapse;}  
        th, td{text-align: center;padding: 5px;}
        th{font-size: 150%;background-color: rgba(2, 8, 74, 0.31);padding: 0.7%;}
        #edit{background-color: rgba(4, 82, 34, 0.5);border:none;}
        #del{background-color: rgba(132, 4, 39, 0.42);border:none;}
        td:hover{background-color: rgba(2, 2, 59, 0.19);}
         #inp{border: none; background-color: rgba(1, 20, 36, 0.69);}
            input{
                width: auto;
                padding: 5px;
                color: whitesmoke;
               
            }
            label{
                
            }
    </style>
        
    <body>
  
           
        <div >
        <div style="margin-left:40%; color:rgba(211, 188, 188, 0.51); font-family: 'Indie Flower', cursive; ">
            
            <h1><b>
                    {{-- <?php
        session_start();
        if($_SESSION["user"]==true){
        echo "Welcome"." ".$_SESSION["user"];
        }
        else{header('location:login.php');}
        ?> --}}
         to</b></h1>
            </div>
            <div style="margin-left:40%; color:rgba(211, 188, 188, 0.51); font-family: 'Indie Flower', cursive; ">
            <h1><b>Posted events information</b></h1>
            </div>
    
 {{-- <?php       
    include_once("connection.php");
        $sql="SELECT *  FROM postevent";
        $run=mysqli_query($conn, $sql);
            echo "
                    <table>
                            <thead>
                                    <tr>
                                        <th>Srno.</th>
                                        <th>Posted By</th>
                                        <th>Event Title</th>
                                        <th>Event Type</th>
                                        <th>Location</th>
                                        <th>Budget</th>
                                        <th>To be Done</th>
                                        <th>Description</th>
                                        <th>Delete</th>
                                    </tr>
                            </thead>
                            <tbody>
                                   ";
                                        while($rows= mysqli_fetch_assoc($run)) {
                                      echo     " <tr>
                                                    <td>$rows[id]</td>
                                                    <td>$rows[u_name]</td>
                                                    <td>$rows[event_title]</td>
                                                    <td>$rows[event_type]</td>
                                                    <td>$rows[city] $rows[location]</td>
                                                    <td>$rows[budgetmin] - $rows[budgetmax]</td>
                                                    <td>$rows[event_date]</td>
                                                    <td>$rows[event_descrip]</td>
                                                   
<td><a href='admin33.php?del_id=$rows[id]' class='btn btn-danger'><button>Delete<buton></a>
                                                    </td>
                                                    
                                                    
                                                </tr>";
                                        }
                                        echo "</tbody>
                                            </table>";
                                     
                        
           
        
        ?> --}}


{{-- <?php
    //insert
    if(isset($_POST['submit_user'])) {
    
    $fname= mysqli_real_escape_string($conn, strip_tags($_POST['fname']));
    $lname= mysqli_real_escape_string($conn, strip_tags($_POST['lname']));
    $email= mysqli_real_escape_string($conn, strip_tags($_POST['email']));
    $password= mysqli_real_escape_string($conn, strip_tags($_POST['password']));
    $gender= mysqli_real_escape_string($conn, strip_tags($_POST['gender']));
    $country= mysqli_real_escape_string($conn, strip_tags($_POST['country']));
    $ins_sql="INSERT INTO `user`(`u_fname`, `u_lname`, `u_email`, `u_password`, `u_gender`, `u_country`) VALUES  ('$fname','$lname','$email','$password','$gender','$country')";
    if(mysqli_query ($conn, $ins_sql)){ ?> --}}
{{-- <script> window.location="admin33.php";</script> --}}
{{-- <?php }
}
//delete user
if (isset($_GET['del_id'])){
    $del_sql="DELETE FROM `postevent` WHERE `u_id`='$_GET[del_id]'";
    if(mysqli_query($conn, $del_sql)) { ?> --}}
{{-- <script>window.location="admin33.php";</script> --}}
{{-- <?php }
}

?> --}}
            <center>
            <a href="view.php"> <button style="height:60px;width:110px;color: white;background-color:#000000a3;border-color:black;border-radius:5px;margin-top:50px">Back to Panel?</button></a>
            <a href="logout.php"> <button style="height:60px;width:110px;color: white;background-color:#000000a3;border-color:black;border-radius:5px;margin-top:50px">Log out</button></a>
       
            </center>
        </div>                 
    </body>
@endsection