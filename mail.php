<?php
include_once 'init.php';
			$message=$_GET['comment'];
			$m = new PHPMailer;


$PD=" SELECT * FROM `user` WHERE `type`='1'";
    if ($PD_query_run=mysqli_query($con,$PD) ) 
    { 
    	while ($query_execute=mysqli_fetch_assoc($PD_query_run)) 
			{
	$m->isSMTP();
	$m->SMTPAuth = true;
		//$m->SMTPDebug = 2;
	$m->Host = 'smtp.gmail.com';
	$m->Username = 'abhijeetsalunkhe21@gmail.com';
	$m->Password = 'techrenegade16';
	$m->SMTPSecure = 'ssl';
	$m->Port = 465;
	$m->From = 'abhijeetsalunkhe21@gmail.com';
	$m->FromName = 'Team-9';
	$m->addReplyTo('abhijeetsalunkhe21@gmail.com','Reply address');
	$m->addAddress($query_execute['email'],'Team-9');

	$m->Subject = 'EDUCON';
	$m->Body = $message;
	$m->AltBody = 'body';
	$m->send();
}

}
echo "<script type='text/javascript'>window.location.href='log.php';</script>";
?>