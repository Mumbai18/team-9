<!DOCTYPE html>
<html>

<head>
    <title>Profiler</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"
        rel = "stylesheet">
    <script src="static/js/index.js"></script>
    <style>
        .parallax-container {
            height: 500px;
        }
        
    </style>
</head>

<body>
    <div class="row">
        <ul class="dropdown-content" id="dropdown1">
            <li><a href="student_register.php">Student</a></li>
            <li><a href="">Donor</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper"><a class="brand-logo" href="/">&nbsp;&nbsp;Educon</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger" href="#" data-target="dropdown1">Register<i class="material-icons right">arrow_drop_down</i></a></li> 
                        <!-- <li><a href="\notes\registeration\uregister.php">Register</a></li> -->
                        <li><a href="\notes\registeration\ulogin.php">Login &nbsp;&nbsp;</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="static\images\photo4.jpg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header">Find your dream job</h3>
                <p class="grey-text text-darken-3 lighten-3">Welcome to Profiler. Someone is waiting to bring you a step closer to your dream. We are here to walk you down the path to your successful future.</p>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="static\images\photo1.jpeg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header">Flaunt your skill set</h3>
                <p class="grey-text text-darken-3 lighten-3">Test your skills with us. Let us help you to evaluate yourself. Be the right candidate for the job.</p>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="static\images\photo2.jpeg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header">What are you waiting for ?</h3>
                <p class="grey-text text-darken-3 lighten-3">Be there before anyone else. Start the journey towards a bright future today.</p>
            </div>
        </div>
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