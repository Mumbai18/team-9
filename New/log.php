<?php
include 'init.php';
include 'header.php';
?>
<body>
<div class="mainbody">
<?php 
if (logged_in()===true) 
{
 	$query=mysqli_query($con,"SELECT * FROM `user` WHERE `id` = '$session_user_id'");
  	$query_execute=mysqli_fetch_assoc($query);
          
          if(($query_execute['type'])==='1')
          {
            include 'student_profile.php';
          }
          else if(($query_execute['type'])==='2')
 			{
 				include 'donar.php';
 			}
 			else if(($query_execute['type'])==='3')
 			{
 				include 'educommitee.php';
 			}
 			else if(($query_execute['type'])==='4')
 			{
 				include 'admin.php';
 			}
 			else{
 				include 'superu.php';	
 			}

 	
}
else{
	include 'index.php';
	}
?>
</div>
</body>
<?php include 'footer.php'; ?>
