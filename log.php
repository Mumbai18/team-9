<?php
include_once 'init.php';

$email=$_POST['username'];
$password=$_POST['password'];

	
if(isset($email) || isset($password))
{
	$login=login($email,$password);
	if($login === false )
	{
      echo "<script type='text/javascript'>window.location.href='index.php';</script>";
	}else{
		echo "<script type='text/javascript'>window.location.href='student_register.php';</script>";
	}
      
}else {
	echo "<script type='text/javascript'>window.location.href='connect.php';</script>";
}

?>