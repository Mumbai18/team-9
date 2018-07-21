<?php 
session_start();
error_reporting(0);

require 'connect.php';
require 'users.php';

if (logged_in()===true) {
	$session_user_id=$_SESSION['id'];
	$user_data=user_data($session_user_id,'email');
	//$cart_data=cart_data($session_user_id,'bid','bname','bprice');
	//echo $user_data['type'];
}
//protected_page();


$errors=array();
?>