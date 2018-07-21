<?php
include 'init.php';
//include 'header.php';
$query=mysqli_query($con,"SELECT * FROM `user` WHERE `id` = '$session_user_id'");
  $query_execute=mysqli_fetch_assoc($query);
          
          if(($query_execute['type'])==='2')
          {
            echo "<script type='text/javascript'>window.location.href='login.php';</script>";
          }
                        
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

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height:800px;
}
/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}
.form-horizontal{
  font-size: 19px;
}
.col-md-4{
   font-size: 15px;
}
/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}
/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 100%;
}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openform(event, 'donate')" id="defaultOpen">Donation Details</button>
  <button class="tablinks" onclick="openform(event, 'ecard')">E-card</button>
</div>

<div id="donate" class="tabcontent">
 
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Donation details</legend>
<div class="card" style="width:50%;float:center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Category</label>
  <div class="col-md-4">
    <select id="gender_class" name="gender_class" class="form-control" required>
      <option value="F">Female</option>
      <option value="M">Male</option>
	  <option value="A">All</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Amount</label>  
  <div class="col-md-4">
  <input id="donation_amt" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
</div>

</fieldset>
</form>

</div>

<div id="ecard" class="tabcontent">

<form class="form-horizontal" method="POST" action="academics_backend.php">
<fieldset>
<!-- Form Name -->
<legend>E-card</legend>
</fieldset>
</form>
</div>


<script>
function openform(evt, detail) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(detail).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
<?php
include_once 'footer.php';
?>