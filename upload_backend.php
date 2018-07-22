<?php
include_once 'init.php';

$targetfolder = "static/";

 $targetfolder = $targetfolder . basename( $_FILES['image']['name']) ;

 $ok=1;

$file_type=$_FILES['image']['type'];
echo $file_type;
if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['image']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['image']['name']). " is uploaded";
 

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}
?>
