<?php 

require 'connect.php';
require 'users.php';
session_start();
error_reporting(0);


if (logged_in()===true) {
	$session_user_id=$_SESSION['id'];
	$user_data=user_data($session_user_id,'type');
}

$errors=array();
?>