<?php 
include 'init.php';
include 'head.php';?>
<body>
<div class="login">

<?php

if (empty($_POST)=== false)
 {
	$Username=$_POST['lname'];
	$Password=$_POST['lpass'];


	
	

		$login=login($Username,$Password);
		if ($login === false) 
		{
			include_once 'error/userdn.php';
			include 'index.php';
			//$errors[]='wron username or password ';
		}
		else 
		{
			$_SESSION['u_id'] = $login;
			echo "<script type='text/javascript'>window.location.href='log.php';</script>";
			exit;
		}
	

}

?>

</div>
<?php
//print_r($errors);
include 'footer.php';
?>