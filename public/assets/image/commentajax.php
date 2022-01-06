<?php
include"connection.php";

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $sql="insert into comments (name,comment,post_time) values('$name','$comment',CURRENT_TIMESTAMP)";
    if($conn->query($sql)===TRUE){
         echo "true";   
         }
    else
    {
        echo "fail";
    }
}
else 
    echo "fail";

?>