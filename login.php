
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
            <div class="nav-wrapper"><a class="brand-logo" href="index.php">&nbsp;&nbsp;Educon</a>
            </div>
        </nav><br><br>
        <form class="col s12" method="POST" action="log.php">
            <div class="row card container col s6 offset-s3"><br>
                <div class="input-field col s12"><input class="validate" id="username" name="username" type="text" required><label for="username">Email Id</label></div>
                <div class="input-field col s12"><input class="validate" id="password" name="password" type="password" required><label for="password">Password</label></div>
                <div class="input-field col s12"><input class="btn" type="submit" value="Login"></div>
            </div>
        </form>
    </div>
    <footer class="page-footer">
        <div class="container">
            <p>
                <center>Copyright &#169 Jain Social Group Educon</center>
            </p>
        </div>
        
    </footer>
</body>

</html>

