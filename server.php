<?php 
    $name="";
    $username="";
    $email="";
    $password="";
    $dob="";
    //connect
    $db = mysqli_connect('localhost','root','','notes');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    //btn clicked
    if (isset($_POST['uregister'])){
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        $dob = mysqli_real_escape_string($db,$_POST['dob']);
    }
    //validate for empty fields done
    //no errs so save
    $password = md5($password);

    $sql = "INSERT INTO user(uname,username,email,password_1,dob) VALUES ('$name','$username','$email','$password','$dob')";

    if (!mysqli_query($db,$sql)) {
        die('Error: ' . mysqli_error($db));
      }
      //echo "1 record added";
      
?>