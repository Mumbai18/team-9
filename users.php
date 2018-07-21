<?php include 'connect.php'; ?>
<?php 

function protected_page(){
	if(logged_in()===false){
		//header('Location:log.php');
		echo "<script type='text/javascript'>window.location.href='log.php';</script>";
		exit();
	}
}


function user_data($u_id){
	global $con;
	$data=array();
	$u_id=(int)$u_id;

	$func_num_args = func_num_args(); 
	$func_get_args=func_get_args();
	#print_r($func_get_args);

	if ($func_num_args>1) {
		unset($func_get_args[0]);

		$fields='`'.implode('`,`', $func_get_args) .'`';
		$data=mysqli_fetch_assoc(mysqli_query($con,"SELECT $fields FROM `user` WHERE `id`=$u_id"));
		//print_r($data);
		
		return $data;
	}
}

function logged_in(){
	return(isset($_SESSION['id'])) ? true : false;
}

function user_exists($Username){
	global $con;
	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$Username'")or die("kk");
	$query_execute=mysqli_fetch_assoc($query);
        	
        	if(empty($query_execute['id']))
        	{
        		return false;
        	}else{
        		return true;
        	}

}


function email_exists($Email){

	//$Email= sanitize($Email);
	//$query=mysqli_query($con,"SELECT COUNT(`u_id`) FROM `Register` WHERE `Email` = '$Email'");
		//return(mysqli_result($query,0) ==1 ) ? true : false;
	global $con;
	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$Email'");
	$query_execute=mysqli_fetch_assoc($query);
        	
        	if(empty($query_execute['id']))
        	{
        		return false;
        	}else{
        		return true;
        	}

}
function user_id($Username){
	//$Username=($Username);
	//echo $Username;
	//return mysqli_result(mysqli_query($con,"SELECT `u_id` FROM `Register` WHERE `Email`='$Username'"), 0,'u_id');
	//$uu=mysqli_fetch_assoc(mysqli_query($con,"SELECT `u_id` FROM `Register` WHERE `Email`='$Username'"));
	global $con;
	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$Username'");
	$query_execute=mysqli_fetch_assoc($query);
        	
        	if(empty($query_execute['id']))
        	{
        		return false;
        	}else{
        		return $query_execute['id'];
        	}
}

function login($Username,$Password){
	$u_id=user_id($Username);
	$Username=($Username);
	$Password=($Password);
	#$Password=md5($Password);
//return(mysqli_result(mysqli_query($con,"SELECT COUNT(`u_id`) FROM `Register` WHERE `Email`='$Username' AND `Password`='$Password'"), 0)==1) ? $u_id:false;

	global $con;
	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$Username' AND `password`='$Password'");
	$query_execute=mysqli_fetch_assoc($query);
        	
        	if(empty($query_execute['id']))
        	{
        		return false;
        	}else{
        		return $query_execute['id'];
        	}

}


?>