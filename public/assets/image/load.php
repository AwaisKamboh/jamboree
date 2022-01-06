<?php
include"connection.php";
$comm = "select name,comment,post_time from comments";

 $result=mysqli_query($conn,$comm);

                        if ($result->num_rows > 0) {

                        while($rows=mysqli_fetch_array($result))
                            { 
	$name=$rows['name'];
	$comment=$rows['comment'];
    $time=$rows['post_time'];
?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}}
?>