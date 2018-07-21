<?php
include_once 'connect.php';

$email=$_GET['email'];
$password=$_GET['psw'];
$fname=$_GET['fname'];
$mobile=$_GET['mobile'];

if(isset($email) || isset($password))
{
	$sql="INSERT into `stud_registration` (`stud_fname`,`stud_mobile`,`stud_email`,`stud_pwd`) VALUES ($fname,$mobile,$email,$password)";
	$result=mysqli_query($con,$sql);
      echo "<script type='text/javascript'>window.location.href='student_register.php';</script>";
      
}else {
	echo "<script type='text/javascript'>window.location.href='#.php';</script>";
}

?>