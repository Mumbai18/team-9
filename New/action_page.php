<?php
include_once 'connect.php';

$email=$_POST['Email'];
$password=$_POST['Password'];
$mobile=$_POST['phoneno'];
$category = $_POST['category'];

if(isset($email) || isset($password))
{

	$sql="INSERT into `user` (`email`,`password`,`mobile_no`,`type`) VALUES ('$email','$password','$mobile','$category')";
			$result=mysqli_query($con,$sql);
			
      echo "<script type='text/javascript'>window.location.href='log.php';</script>";
      
}else {
	echo "<script type='text/javascript'>window.location.href='log.php';</script>";
}

?>