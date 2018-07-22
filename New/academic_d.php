<?php
include_once 'header.php';
?>  
<div class="login">
<div id="stud_academics" class="tabcontent">

<form class="form-horizontal" action="academics_backend.php" method="post">
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
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>&nbsp;&nbsp;
    <button id="update" name="update" class="btn btn-primary">Update</button>
  </div>
</div>


</fieldset>
</form>
</div>
</div>

<?php
include_once 'footer.php';
?>