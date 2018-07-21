<?php
include_once 'connect.php';

$email=$_GET['email'];
$password=$_GET['psw'];
$repeat_pass=$_GET['psw-repeat'];

if(isset($email) || isset($password))
{
	$sql="INSERT into `stud_registration` (`stud_email`,`stud_pwd`) values ($email,$password)";
	$result=mysqli_query($con,$sql);
      
      if($result)
      {
    echo "<script type='text/javascript'>window.location.href='student_register.php';</script>";

      }else
      {
    echo "<script type='text/javascript'> window.alert('Error: Wrong Credentials'); </script>";
    echo "<script type='text/javascript'>window.location.href='signup.php';</script>";
      }
}else {
	echo "<script type='text/javascript'>window.location.href='student_register.php';</script>";
}

?>