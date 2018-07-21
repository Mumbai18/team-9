<?php include 'connect.php'; ?>

<?php


function protected_page(){
        if(logged_in()===false){
                //header('Location:log.php');
                echo "<script type='text/javascript'>window.location.href='log.php';</script>";
                exit();
        }
}


function logged_in(){
        return(isset($_SESSION['stud_id'])) ? true : false;
}

function user_exists($Username){
        global $con;
        $query=mysqli_query($con,"SELECT * FROM `stud_registration` WHERE `stud_email` = '$Username'")or die("kk");
        $query_execute=mysqli_fetch_assoc($query);
                
                if(empty($query_execute['stud_id']))
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
        $query=mysqli_query($con,"SELECT * FROM `stud_registration` WHERE `stud_email` = '$Email'");
        $query_execute=mysqli_fetch_assoc($query);
                
                if(empty($query_execute['stud_id']))
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
        $query=mysqli_query($con,"SELECT * FROM `stud_registration` WHERE `stud_email` = '$Username'");
        $query_execute=mysqli_fetch_assoc($query);
                
                if(empty($query_execute['stud_id']))
                {
                        return false;
                }else{
                        return $query_execute['stud_id'];
                }
}


function login($Username,$Password){
	//$u_id=user_id($Username);
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