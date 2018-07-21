<?php
include_once 'connect.php';
include_once 'init.php';
$id=$session_user_id;
$current_acad=$_POST['current_acad'];
$collegename=$_POST['collegename'];
$current_year=$_POST['current_year'];
//echo $current_year;
$fees=$_POST['fees'];
$other_exp=$_POST['other_exp'];
$fund=$_POST['fund'];
$SSC=$_POST['SSC'];
$HSC=$_POST['HSC'];
$grad_marks=$_POST['grad_marks'];
$pre_marks=$_POST['pre_marks'];
$family_income=$_POST['family_income'];


	$sql="INSERT into `stud_academics` (`stud_id`,`stud_currentdegree`,`stud_college`,`stud_currentyear`,`stud_fees`,`stud_otherexpenses`,`stud_govtfund`,`stud_sscmarks`,`stud_hscmarks`,`stud_gradmarks`,`stud_familyincome`,`stud_previousmarks`,`stud_financialrating`,`stud_educationalrating`,`stud_totalamtrequired`) VALUES ('$id','$current_acad','$collegename','$current_year','$fees','$other_exp','$fund','$SSC','$HSC','$grad_marks','$family_income','$pre_marks','5','5','20000')";
			$result=mysqli_query($con,$sql) or die(mysql_error());
			echo $result;
			//echo "<script type='text/javascript'>window.location.href='student_profile.php';</script>";
    

?>