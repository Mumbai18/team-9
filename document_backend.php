<?php
include_once 'connect.php';
include 'init.php';

$id=$session_user_id;
//echo $id;
$stud_photo=$_FILES['photo'];

$stud_familyphoto=$_FILES['fam'];
$stud_residencephoto=$_FILES['re_card'];
$stud_rationphoto=$_FILES['re_photo'];
$stud_aadharphoto=$_FILES['aadhar'];
$stud_electricitybill=$_FILES['elec'];
//$stud_parentaadhar=$_FILES[''];
//$stud_birthcerti=$_FILES[''];
//$stud_achievements=$_FILES[''];
$stud_feestructure=$_FILES['feestruct'];
$stud_familyincome=$_FILES['certi'];
$stud_previousmarksheet=$_FILES['pdf'];
//$stud_sscmarksheet=$_FILES[''];
//$stud_gradmarksheet=$_FILES[''];

//$sql="INSERT into `stud_personal_info` (`stud_id`,`stud_photo`,`stud_familyphoto`,`stud_rationphoto`,`stud_aadharphoto`,`stud_electricitybill`,`stud_parentaadhar`,`stud_birthcerti`,`stud_achievements`,`stud_feestructure`,`stud_familyincome`,`stud_previousmarksheet`,`stud_sscmarksheet`,`stud_hscmarksheet`,'stud_gradmarksheet') VALUES (`$stud_id`,`$stud_photo`,`$stud_familyphoto`,`$stud_rationphoto`,`$stud_aadharphoto`,`$stud_electricitybill`,`$stud_parentaadhar`,`$stud_birthcerti`,`stud_achievements`,`$stud_feestructure`,`$stud_familyincome`,`$stud_previousmarksheet`,`$stud_sscmarksheet`,`$stud_hscmarksheet`,'$stud_gradmarksheet')";

$sql="INSERT into `stud_personal_info` (`stud_id`,`stud_photo`,`stud_familyphoto`,`stud_rationphoto`,`stud_aadharphoto`,`stud_electricitybill`,`stud_feestructure`,`stud_familyincome`,`stud_previousmarksheet`) VALUES (`$stud_id`,`$stud_photo`,`$stud_familyphoto`,`$stud_rationphoto`,`$stud_aadharphoto`,`$stud_electricitybill`,`$stud_feestructure`,`$stud_familyincome`,`$stud_previousmarksheet`)";
			$result=mysqli_query($con,$sql);
    echo "<script type='text/javascript'>window.location.href='student_profile.php';</script>";
     

?>