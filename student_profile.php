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


<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openform(event, 'personal_info')" id="defaultOpen">Personal Information</button>
  <button class="tablinks" onclick="openform(event, 'stud_academics')">Academics</button>
  <button class="tablinks" onclick="openform(event, 'document')">Documents</button>
</div>

<div id="personal_info" class="tabcontent">
 
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="POST" action="personal_backend.php">
<fieldset>

<!-- Form Name -->
<legend>Personal details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Middle Name</label>  
  <div class="col-md-4">
  <input id="middlename" name="middlename" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Home address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" required></textarea>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">State</label>  
  <div class="col-md-4">
  <input id="state" name="state" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">PinCode</label>  
  <div class="col-md-4">
  <input id="pincode" name="pincode" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Gender</label>
  <div class="col-md-4">
    <select id="gender" name="gender" class="form-control">
      <option value="M">Male</option>
      <option value="F">Female</option>
    <option value="O">Other</option>

    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Caste</label>
  <div class="col-md-4">
    <select id="caste" name="caste" class="form-control">
      <option value="Open">Open</option>
      <option value="OBC">OBC</option>
	  <option value="EBC">EBC</option>
	  <option value="Jain">Jain</option>
	  <option value="SC">SC</option>
	  <option value="NTC">NTC</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Category</label>
  <div class="col-md-4">
    <select id="category" name="category" class="form-control" required>
      <option value="1">Orphan</option>
      <option value="2">No Father</option>
	  <option value="3">No Mother</option>
	  <option value="4">Blind</option>
	  <option value="5">Handicapped</option>
    </select>
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
    <label class="control-label col-md-4" for="registration-date">Date of birth:</label>
    <div class="col-md-4">
        <div class="input-group registration-date-time">
        	<span class="input-group-addon" id="basic-addon1">
		    <input class="form-control" name="registration_date" id="registration_date" type="date">
        </div>
    </div>    
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mother's Name</label>  
  <div class="col-md-4">
  <input id="mothername" name="mothername" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Father's Name</label>  
  <div class="col-md-4">
  <input id="fathername" name="fathername" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Save</button>
  </div>
</div>

</fieldset>
</form>

</div>

<div id="stud_academics" class="tabcontent">

<form class="form-horizontal" method="POST" action="academics_backend.php">
<fieldset>

<!-- Form Name -->
<legend>Academics details</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Current Academics</label>
  <div class="col-md-4">
    <select id="current_acad" name="current_acad" class="form-control">
	  <option value="1">Secondary School</option>
      <option value="2">SSC</option>
	  <option value="3">HSC</option>
	  <option value="4">Diploma</option>
	  <option value="5">B.E</option>
	  <option value="6">MBBS</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">College Name</label>  
  <div class="col-md-4">
  <input id="collegename" name="collegename" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Current Year</label>
  <div class="col-md-4">
    <select id="current_year" name="current_year" class="form-control">
	  <option value="10th">10th</option>
	  <option value="11th">11th</option>
	  <option value="12th">12th</option>
	  <option value="1st">1st year</option>
	  <option value="2nd">2nd year</option>
	  <option value="3rd">3rd year</option>
	  <option value="4th">4th year</option>
    </select>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fees</label>  
  <div class="col-md-4">
  <input id="fees" name="fees" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Other Expenses</label>  
  <div class="col-md-4">
  <input id="other_exp" name="other_exp" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Government Fund</label>  
  <div class="col-md-4">
  <input id="fund" name="fund" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">SSC %</label>  
  <div class="col-md-4">
  <input id="SSC" name="SSC" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">HSC %</label>  
  <div class="col-md-4">
  <input id="HSC" name="HSC" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Graduation %</label>  
  <div class="col-md-4">
  <input id="grad_marks" name="grad_marks" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Previous years Marks%</label>  
  <div class="col-md-4">
  <input id="pre_marks" name="pre_marks" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Family Income</label>  
  <div class="col-md-4">
  <input id="family_income" name="family_income" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Save</button>
  </div>
</div>

</fieldset>
</form>
</div>

<div id="document" class="tabcontent">
  
<form class="form-horizontal" method="POST" action="document_backend.php">
<fieldset>

<!-- Form Name -->
<legend>Upload Documents</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Passport Photo </label>  
  <div class="col-md-4">
  <input id="photo" name="photo" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">family Photo </label>  
  <div class="col-md-4">
  <input id="fam" name="fam" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">RationCard Photo </label>  
  <div class="col-md-4">
  <input id="re_card" name="re_card" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Residence Photo </label>  
  <div class="col-md-4">
  <input id="re_photo" name="re_photo" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div><!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">AadharCard Photo </label>  
  <div class="col-md-4">
  <input id="aadhar" name="aadhar" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Electricity Bill Photo </label>  
  <div class="col-md-4">
  <input id="elec" name="elec" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fees Structure Photo </label>  
  <div class="col-md-4">
  <input id="feestruct" name="feestruct" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Income Certificate </label>  
  <div class="col-md-4">
  <input id="certi" name="certi" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Upload PDF of Marksheet  </label>  
  <div class="col-md-4">
  <input id="pdf" name="pdf" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" value="Upload">Save</button>
  </div>
</div>

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