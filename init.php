<?php 
session_start();
error_reporting(0);

require 'connect.php';
require 'function.php';


if (logged_in() ===true) {
	$session_user_id=$_SESSION['id'];
	$user_data=user_data($session_user_id,'email');
}
//protected_page();


$errors=array();
?>