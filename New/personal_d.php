<?php
include_once 'header.php';
?>  
<div class="login">
<form class="form-horizontal" action="personal_backend.php" method="post">
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
  <label class="col-md-4 control-label" for="selectbasic">Caste</label>
  <div class="col-md-4">
    <select id="gender" name="gender" class="form-control">
      <option value="M">MALE</option>
      <option value="F">FEMALE</option>
    <option value="O">Others</option>
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
		    <input class="form-control" name="registration_date" id="registration-date" type="date">
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
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>
</div>
<?php
include_once 'footer.php';
?>