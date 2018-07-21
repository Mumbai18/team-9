<?php
include_once 'connect.php';

$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['phoneno'];
if(isset($email) || isset($password))
{

	$sql="INSERT into `user` (`email`,`password`,`mobile_no`) VALUES ('$email','$password','$mobile')";
			$result=mysqli_query($con,$sql);
      echo "<script type='text/javascript'>window.location.href='login.php';</script>";
      
}else {
	echo "<script type='text/javascript'>window.location.href='connect.php';</script>";
}

?>