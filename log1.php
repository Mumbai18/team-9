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


	if (empty($Username)=== true || empty($Password)=== true) 
	{
		include_once 'error/Emptyfield.php';
		//echo "<script type='text/javascript'>window.location.href='login.php';</script>";
		include 'index.php';
		//$errors[]='user name not there ';
	}

	else if(user_exists($Username)=== false) 
	{

		include_once 'error/userdn.php';
		include 'index.php';
		//$errors[]='user name not exist ';
	}
	else
	{

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
}?>

</div>
<?php
//print_r($errors);
include 'footer.php';
?>