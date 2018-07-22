<?php
include_once 'header.php';
?>  
<div class="login">

<div id="document" class="tabcontent">
  
<form class="form-horizontal" method="post" action="upload_backend.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Upload Documents</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Upload PDF of Marksheet  </label>  
  <div class="col-md-4">
  <input id="pdf" name="image" type="file" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" value="Upload" type="submit">Save</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>

<?php
include_once 'footer.php';
?>