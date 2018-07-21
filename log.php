<?php
include_once 'connect.php';
include_once 'function.php';

$email=$_POST['username'];
$password=$_POST['password'];


if(isset($email) || isset($password))
{
	$login=login($email,$password);
	if($login!=0)
	{
      echo "<script type='text/javascript'>window.location.href='#.php';</script>";
	}else{
		echo "<script type='text/javascript'>window.location.href='login.php';</script>";
	}
      
}else {
	echo "<script type='text/javascript'>window.location.href='connect.php';</script>";
}

?>