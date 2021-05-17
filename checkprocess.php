<?php

include_once("connection.php");

$uid=$_GET["uid"];
$pwd=$_GET["pwd"];

$query="insert into checkerror values('$uid','$pwd')";
print_r($query);
mysqli_query($dbcon,$query);

$msg=mysqli_error($dbcon);

if($msg==""){
    // echo "Signup Successful";
  	echo "Signed Up Successfully.<br>";
}
else
    echo "Fill the required data properly";

 ?>
