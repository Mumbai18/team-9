<?php include('connect.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>User Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"
        rel = "stylesheet">
    <script src="static/js/register.js"></script>
    <script>
        
    </script>
    <style>
        .page-footer {
           left: 0;
           bottom: 0;
           width: 100%;
           position: fixed; 
        }
    </style>
</head>

<body>
    <div class="row">
        <nav>
            <div class="nav-wrapper"><a class="brand-logo" href=" ">&nbsp;&nbsp;Register</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="login.php">Login&nbsp;&nbsp;</a></li>
                </ul>
            </div>
        </nav><br><br>
        <form class="col s12" method="POST" action="student_register.php" id="formwrap">
            <div class="row card container col s6 offset-s3"><br>
                <div class="input-field col s12"><input class="validate" id="email" name="email" type="email" required><label for="email">Email</label></div>
                <div class="input-field col s12"><input class="validate" id="password" name="password" type="password" required><label for="password">Password</label></div>
                <div class="input-field col s12"><input class="validate" id="phoneno" name="phoneno" type="text" required><label for="password">Phone No</label></div>
                <div class="input-field col s12"><input class="btn" name="uregister" type="submit" value="Register"></div><br></div>
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