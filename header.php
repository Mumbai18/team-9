<?php
include_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- CUSTOME TEMPLATE -->
  <title>Team-9</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>
   
 
  <style type="text/css">
    .navbar{
       background-color: #17202A; 
      border: 0;
      border-radius: 0;
      margin-top: 0px;
      overflow: hidden;
    }
    .nav.navbar-nav.navbar-right li a{
      color: #ffffff;
    }

    .navbar-default a.navbar-brand {
      color: #ffffff;
    }
    .element{
      border: 0;
      border-radius: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      overflow: hidden;
      margin-top: 0px;
      border: 0;
      min-height: 460px;
      max-height: auto;
      background-color: #CB4335;
      color: #3498DB;

    }
    .exp{
      border: 0;
      border-radius: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      overflow: hidden;
      margin-top: 0px;
      border: 0;
      min-height: 310px;
      max-height: auto;
      background-color: #3498DB;
      padding-top: 40px;
      color: #CB4335;
      font-family: Lato;
     }
     .exp h3{
      font-size: 150%;
      font-weight: bolder;
     }
     
    .footer{
      height: 70px;
      background-color: #17202A;
      color: #F2F3F4;
      padding-top: 25px;
      font-size: 120%;
      font-family: Montserrat, sans-serif;
      padding-left: 20px;
      padding-right: 20px;
    }
    .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    }

    .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
    }
    .login{
    
      height: auto;
      border: 0;
      border-radius: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      padding-top: 70px;
      padding-bottom: 55px;
       overflow: auto;
    }
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
    .product{
        height: auto;

      border: 0;
      border-radius: 0;
      margin-top: 0px;
      margin-bottom: 0px;
      padding-top: 70px;
        padding-bottom: 1000px;
    }
    @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
     
  }
    
  </style>`

  <script>
    
function lo(){
 var testresults;
    //var x=document.forms["reg"]["first_name"].value;
    var x=document.reg.email.value;
    var y=document.reg.password.value;
    //var z=document.reg.college_name.value
    //var m=document.reg.password.value
    //var n=document.reg.number.value

 if(x=="" || y==""){
alert("Please Enter all the values!");
        testresults=false;

}

return (testresults);
}

function cm(){
 var testresults;
    //var x=document.forms["reg"]["first_name"].value;
    var x=document.reeg.rname.value
    var y=document.reeg.rpass.value
    var z=document.reeg.rnumber.value
    //var m=document.reg.password.value
    //var n=document.reg.number.value
    //var z=document.reg.last_name.value;

var str=document.reeg.remail.value
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
/*if (filter.test(str))
{
testresults=true;
}*/
 if(x=="" || y=="" || z=="" ){
alert("Please Enter all the values!");
        testresults=false;

}
else if (filter.test(str))
{
testresults=true;
}
else{//(!filter.test(str) || str == null || str == ""){
alert("Please input a valid email address!");
        testresults=false;

}
/*if(m==null || m=="" || x==null || x=="" || y==null || y="" || z==null || z=="" || n==null || n=="" )
{
alert("Please Enter all the values!");
        return false;

}*/
return (testresults);

}


  </script>
</head>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                     
      </button>
      <a class="navbar-brand" href="index.php">Team-9</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
       
       
        <?php
         
        if(logged_in()===true)
        {
          
        echo '<li><a href="log.php">Pannel &nbsp;&nbsp;</a></li>';
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
  </div>
</nav>
<body>