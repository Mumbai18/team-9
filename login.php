<?php
include_once 'connect.php';

$email=$_GET['email'];
$password=$_GET['psw'];


if(isset($email) || isset($password))
{	
      $login=login($email,$password);
      if($login === false)
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