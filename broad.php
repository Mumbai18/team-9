<?php
include_once 'header.php';
                        
?>
<div class="login">
 <div class="col-sm-1"></div>
	  <div class="col-sm-10">
 	<ul class="list-group">
      <li class="list-group-item text-center">
        <h2>Broadcast Message </h2><br><br>
        
        <form name="reg" method="get" action="mail.php">
        <div class="input-group">
        <div class="form-group">
	      <label for="comment">Message:</label>
	      <textarea class="form-control" rows="5" cols="200" name="comment" ></textarea>
	    </div>
	      </div>
	    
    <br><br>		
        <input type="submit" class="btn btn-primary" value="ADD">
      
      </form>
      </li>
    </ul>

		</div>
   <div class="col-sm-1"></div>
</div>
<?php
include_once 'footer.php';
?>