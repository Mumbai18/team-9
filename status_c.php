<?php
include_once 'connect.php';
include_once 'init.php';
$id=$_GET['id'];
$val=$_GET['val'];
echo $val;


	$sql="UPDATE `stud_personal_info` SET `stud_status`='$val' where `stud_id`='$id'";
			$result=mysqli_query($con,$sql) or die(mysql_error());
			//echo $result;
			echo "<script type='text/javascript'>window.location.href='log.php';</script>";
    

?>