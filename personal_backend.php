<?php
include_once 'connect.php';
include 'init.php';

$id=$session_user_id;
//echo $id;
$stud_fname=$_POST['firstname'];
//echo $stud_fname;
$stud_mname=$_POST['middlename'];
$stud_lname=$_POST['lastname'];
$stud_address=$_POST['address'];
$stud_city=$_POST['city'];
$stud_state=$_POST['state'];
$stud_pincode=$_POST['pincode'];
$stud_gender=$_POST['gender'];
//echo "$stud_gender";
$stud_caste=$_POST['caste'];
//echo "$stud_caste";
$stud_category=$_POST['category'];
$stud_dob=$_POST['registration_date'];
$stud_mothername=$_POST['mothername'];
$stud_fathername=$_POST['fathername'];

$sql="INSERT into `stud_personal_info` (`stud_id`,`stud_fname`,`stud_mname`,`stud_lname`,`stud_address`,`stud_city`,`stud_state`,`stud_pincode`,`stud_gender`,`stud_caste`,`stud_category`,`stud_dob`,`stud_mothername`,`stud_fathername`) VALUES ('$id','$stud_fname','$stud_mname','$stud_lname','$stud_address','$stud_city','$stud_state','$stud_pincode','$stud_gender','$stud_caste','$stud_category','$stud_dob','$stud_mothername','$stud_fathername')";
			$result=mysqli_query($con,$sql);
    echo "<script type='text/javascript'>window.location.href='student_profile.php';</script>";
     

?>