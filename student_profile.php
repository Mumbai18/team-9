<?php

include_once 'header.php';
include_once 'init.php';

?>
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

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Personal details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Middle Name</label>  
  <div class="col-md-4">
  <input id="middlename" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <input id="lastname" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Home address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="textarea" required></textarea>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">State</label>  
  <div class="col-md-4">
  <input id="state" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <input id="city" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">PinCode</label>  
  <div class="col-md-4">
  <input id="city" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="M" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="F">
      Female
    </label>
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
        	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
		    <input class="form-control" name="registration_date" id="registration-date" type="date">
        </div>
    </div>    
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mother's Name</label>  
  <div class="col-md-4">
  <input id="mothername" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Father's Name</label>  
  <div class="col-md-4">
  <input id="fathername" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>

</div>

<div id="stud_academics" class="tabcontent">

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Academics details</legend>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Current Academics</label>
  <div class="col-md-4">
    <select id="current_acad" name="caste" class="form-control">
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
  <input id="collegename" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Current Year</label>
  <div class="col-md-4">
    <select id="current_year" name="caste" class="form-control">
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
  <input id="fees" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Other Expenses</label>  
  <div class="col-md-4">
  <input id="other_exp" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Government Fund</label>  
  <div class="col-md-4">
  <input id="fund" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">SSC %</label>  
  <div class="col-md-4">
  <input id="SSC" name="textinput" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">HSC %</label>  
  <div class="col-md-4">
  <input id="HSC" name="textinput" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Graduation %</label>  
  <div class="col-md-4">
  <input id="grad_marks" name="textinput" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Previous years Marks%</label>  
  <div class="col-md-4">
  <input id="pre_marks" name="textinput" type="text" placeholder="" class="form-control input-md" >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Family Income</label>  
  <div class="col-md-4">
  <input id="family_income" name="textinput" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>
</div>

<div id="document" class="tabcontent">
  
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Upload Documents</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Passport Photo </label>  
  <div class="col-md-4">
  <input id="photo" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">family Photo </label>  
  <div class="col-md-4">
  <input id="fam_photo" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Residence Photo </label>  
  <div class="col-md-4">
  <input id="re_photo" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">RationCard Photo </label>  
  <div class="col-md-4">
  <input id="re_card" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Residence Photo </label>  
  <div class="col-md-4">
  <input id="re_photo" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div><!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">AadharCard Photo </label>  
  <div class="col-md-4">
  <input id="aadhar_card" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Electricity Bill Photo </label>  
  <div class="col-md-4">
  <input id="elec_photo" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fees Structure Photo </label>  
  <div class="col-md-4">
  <input id="feestruct_photo" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Income Certificate </label>  
  <div class="col-md-4">
  <input id="certi" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Upload PDF of Marksheet  </label>  
  <div class="col-md-4">
  <input id="pdf" name="textinput" type="file" placeholder="" class="form-control input-md" required>
    
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
 <?php

include_once 'footer.php';

?>