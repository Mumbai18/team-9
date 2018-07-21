<?php 
include 'init.php';
//include 'head.php';
?>
<body>
<div class="login">

<?php

	$Username=$_POST['username'];
	$Password=$_POST['password'];

		$login=login($Username,$Password);
		if ($login === false) 
		{
			echo "<script type='text/javascript'>window.location.href='login.php';</script>";
			exit;
		}
		else 
		{
			$_SESSION['id'] = $login;
			echo "<script type='text/javascript'>window.location.href='student_profile.php';</script>";
			exit;
		}
	


?>

<?php

include 'footer.php';
?>