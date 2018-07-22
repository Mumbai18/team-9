<?php
include_once 'header.php';
?>
 <div class="login">
  <div class="col-sm-2">
  </div>
 <div class="col-sm-8">
    <ul class="list-group">
      <li class="list-group-item text-center">
        <h2>Personal Details</h2><br><br>
        
        <form method="post" action="action_page.php">
         <div class="input-group">
         <span class="input-group-addon">Email</span>
          <input type="email"  class="form-control" name="Email" id="Email" placeholder="Email" required>
      </div>
      <br><br>
        <div class="input-group">
         <span class="input-group-addon">Password</span>
          <input type="name" class="form-control" name="Password" id="Password" placeholder="Password" required>
      </div>
      <br><br>
      <div class="input-group">
         <span class="input-group-addon">Mobile-No</span>
          <input type="name" maxlength="10" class="form-control" name="phoneno" id="phoneno" placeholder="Mobile-No" required>
      </div>
      <br><br>
      <select id="category" name="category" class="form-control" required>
                        <option value="">Select</option>
                      <option value="1">Student</option>
                      <option value="2">Donor</option>

                    </select>
    

      <br><br>
        <input type="submit" class="btn btn-primary" value="Add">
       
      </form>
      </li>
    </ul>
    </div>  
    <div class="col-sm-2">
  </div>
    </div>

    <?php
include_once 'footer.php';
?>