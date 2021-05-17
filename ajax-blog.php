<?php
include_once("connection.php");
$uid=$_GET["uid"];
$dateofrecord=$_GET["dateofrecord"];
$blog=$_GET["blog"];
// $dia=$_GET["dia"];
// $pulse=$_GET["pulse"];

$query="insert into blog values('$uid','$dateofrecord','$blog')";
// print_r($query);
mysqli_query($dbcon,$query);

$msg=mysqli_error($dbcon);

if($msg=="")
    echo "Record saved successfully";
else
    echo $msg;




?>
