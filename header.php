<?php
include 'init.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Educon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"
        rel = "stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="static/js/index.js"></script>
    <style>
        .parallax-container {
            height: 500px;
        }
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
        
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper"><a class="brand-logo" href="index.php">&nbsp;&nbsp;Educon</a>
                    <ul class="right hide-on-med-and-down">
                      <?php
                       if(logged_in()===true)
                        {
                            echo '<li><a href="logout.php">Logout &nbsp;&nbsp;</a></li>';
                        }
                        else
                        {
                       echo '<li><a href="student_register.php">Register &nbsp;&nbsp;</a></li>
                        <li><a href="login.php">Login &nbsp;&nbsp;</a></li>';
                        }
                    ?>
                    </ul>
                </div>
            </nav>
        </div>
