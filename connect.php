<?php 
$connect_error='Sorry';
//print_r(PDO::getAvailableDrivers());
//mysql_connect('localhost','root','root') or die($connect_error) ;
//mysql_select_db('try')or die($connect_error) ;
$con=mysqli_connect("localhost","root","root","Placement")or die($connect_error);
 ?>