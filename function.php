<?php include 'connect.php'; ?>

<?php


function protected_page(){
        
        if(logged_in()===false){
                echo "<script type='text/javascript'>window.location.href='log.php';</script>";
                exit();
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
	
	$Username=($Username);
	$Password=($Password);

	global $con;
	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$Username' AND `password`='$Password'");
	$query_execute=mysqli_fetch_assoc($query);
        	
        	if(empty($query_execute['id']))
        	{
        		return false;
        	}else{
        		//$_SESSION['id']=$query_execute['id'];
                        return $query_execute['id'];
        	}

}


?>