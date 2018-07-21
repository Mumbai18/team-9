<?php
include_once 'init.php';

$email=$_POST['username'];
$password=$_POST['password'];

	
if(isset($email) || isset($password))
{
	$login=login($email,$password);
	if($login === false )
	{
      echo "<script type='text/javascript'>window.location.href='login.php';</script>";
	}else{
		echo "<script type='text/javascript'>window.location.href='student_profile.php';</script>";
	}
      
}else {
	echo "<script type='text/javascript'>window.location.href='connect.php';</script>";
}

?>