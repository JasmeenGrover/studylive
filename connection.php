<?php
global $dbcon;
$dbcon=mysqli_connect("localhost","root","","studylab");

$msg=mysqli_connect_error();

// if($msg=="")
//     echo "<h1>Connected succesfully";
// else
//     echo $msg;

$msg=mysqli_connect_error();
if($msg)
{
  die($msg);
}
