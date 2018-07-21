<?php
include_once 'connect.php';

$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['phoneno'];

if(isset($email) || isset($password))
{
	$sql="INSERT INTO `stud_registration` (`stud_mobile`,`stud_email`,`stud_pwd`) VALUES ('$mobile','$email','$password')";
			mysqli_query($con,$sql) or die(mysqli_error($con));
      echo "<script type='text/javascript'>window.location.href='login.php';</script>";
      
}else {
	echo "<script type='text/javascript'>window.location.href='connect.php';</script>";
}

?>