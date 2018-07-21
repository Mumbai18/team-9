<?php
include_once 'connect.php';
include_once 'init.php';
$id=$session_user_id;
$class=$_POST['gender_class'];
$amt=$_POST['donation_amt'];


	$sql="INSERT INTO `donor_annual` (`donor_id`,`donor_criteria`,`donor_donation`) VALUES ('$id','$class','$amt')";
			$result=mysqli_query($con,$sql) or die(mysql_error());
			//echo $result;
			echo "<script type='text/javascript'>window.location.href='log.php';</script>";
    

?>