<<<<<<< HEAD
<?php
include_once 'connect.php';

$email=$_GET['email'];
$password=$_GET['psw'];


if(isset($email) || isset($password))
{	
      $login=login($email,$password);
      if($login === false)
      {
        echo "<script type='text/javascript'>window.location.href='student_register.php';</script>";

      }else
      {
        echo "<script type='text/javascript'> window.alert('Error: Wrong Credentials'); </script>";
        echo "<script type='text/javascript'>window.location.href='signup.php';</script>";
      }
}else {
	     echo "<script type='text/javascript'>window.location.href='student_register.php';</script>";
}

?>
=======
<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"
        rel = "stylesheet">
        <script src="static/js/login.js"></script>

    <style>
        .page-footer {
           position:fixed;
           left: 0;
           bottom: 0;
           width: 100%;
        }
    </style>
</head>

<body>
    <div class="row">
        <nav>
            <div class="nav-wrapper"><a class="brand-logo" href=" ">&nbsp;&nbsp;Educon</a>
                <ul class="right hide-on-med-and-down">
                    <li>Loginr&nbsp;&nbsp;</li>
                </ul>
            </div>
        </nav><br><br>
        <form class="col s12" method="POST" action="ulogin">
            <div class="row card container col s6 offset-s3"><br>
                <div class="input-field col s12"><input class="validate" id="username" name="username" type="text" required><label for="username">Username</label></div>
                <div class="input-field col s12"><input class="validate" id="password" name="password" type="password" required><label for="password">Password</label></div>
                <div class="input-field col s12"><input class="btn" type="submit" value="Login"></div>
            </div>
        </form>
    </div>
    <footer class="page-footer">
        <div class="container">
            <p>
                <center>Made with &#10084; and lot's of &#x2615;</center>
            </p>
        </div>
        
    </footer>
</body>

</html>
>>>>>>> a0e038ad8ca07257d061c2359e52450f633e4fa6
