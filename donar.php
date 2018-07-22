<?php
include_once 'header.php';
include_once 'init.php';          
?>
<div class="login">

<form class="form-horizontal" action="donar_backend.php" method="post">
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
  <input id="donation_amt" name="donation_amt" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
  </div>
</div>
</div>

</fieldset>
</form>



<form class="form-horizontal" action="update_donor.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Update details</legend>
<?php
$PD=" SELECT * FROM `donor` where donor_id='$session_user_id'";
    if ($PD_query_run=mysqli_query($con,$PD) ) 
    { 
      while ($query_execute=mysqli_fetch_assoc($PD_query_run)) 
      {
        echo '
<div class="card" style="width:50%;float:center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First-Name</label>  
  <div class="col-md-4">';
  echo '<input id="donation_amt" name="FName" type="text" placeholder="" class="form-control input-md" value="'.$query_execute['donor_fname'].'" >
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last-name</label>  
  <div class="col-md-4">
  <input id="donation_amt" name="Lname" type="text" placeholder="" class="form-control input-md" value="'.$query_execute['donor_lname'].'">
    
  </div>
</div>';
}
}

else
{
  echo '
  <form class="form-horizontal" action="update_donor.php" method="post">
<fieldset>
<div class="card" style="width:50%;float:center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First-Name</label>  
  <div class="col-md-4">
  <input id="donation_amt" name="FName" type="text" placeholder="" class="form-control input-md"  >
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last-name</label>  
  <div class="col-md-4">
  <input id="donation_amt" name="Lname" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>';

}
?>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Update</button>
  </div>
</div>
</div>

</fieldset>
</form>

</div>

<?php
include_once 'footer.php';
?>