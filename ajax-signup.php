<?php
include_once("connection.php");
// session_start();
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
$institute=$_GET["institute"];
$rad=$_GET["rad"];

// include_once("SMS_OK_sms.php");

$query="insert into users values('$uid','$pwd','$institute','$rad',CURRENT_DATE())";
mysqli_query($dbcon,$query);

$msg=mysqli_error($dbcon);

if($msg==""){
    echo "Signup Successful";
    // $_SESSION["activeuser"]=$uid;
    // $resp=SendSMS($mob,"You are signed up successfully...");
//	echo "Signed Up Successfully.<br>".$resp;
}
else
    echo "Fill the required data properly";

?>
