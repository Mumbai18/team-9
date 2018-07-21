<?php
include_once 'init.php';

$er=$_GET['ER'];
$sr=$_GET['SR'];
$id=$_GET['id'];
//echo $id;
$sql="UPDATE `stud_academics` SET `stud_financialrating`='$sr',`stud_educationalrating`='$er' WHERE `stud_id`='$id'";
$result=mysqli_query($con,$sql);
echo "<script type='text/javascript'>window.location.href='log.php';</script>";
?>