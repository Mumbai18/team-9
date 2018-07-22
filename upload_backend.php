<?php
include_once 'init.php';

    $check = getimagesize($_FILES['image']['tmp_name']);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $id=$session_user_id;
        
        
        $insert = $con->query("INSERT INTO stud_document (stud_id, stud_photo) VALUES ('$id', '$imgContent')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "sorry"
;    }

?>
