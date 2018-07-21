<?php include 'connect.php'; ?>

<?php

function login($Username,$Password){
	$u_id=user_id($Username);
	$Username=($Username);
	$Password=($Password);

	global $con;
	$query=mysqli_query($con,"SELECT * FROM `stud_registration` WHERE `stud_email` = '$Username' AND `stud_pwd`='$Password'");
	$query_execute=mysqli_fetch_assoc($query);
        	
        	if(empty($query_execute['stud_id']))
        	{
        		return false;
        	}else{
        		return $query_execute['stud_id'];
        	}

}


?>