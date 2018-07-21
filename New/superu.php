<?php
include_once 'header.php';
                        
?>
<div class="login">
<div class="col-sm-2">
  </div>
  <div class="col-sm-8">
    <ul class="list-group">
      <li class="list-group-item text-center">
        <h2>Add users </h2><br><br>
        
        <form name="reg" method="post" action="action_page.php">
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="email" class="form-control" name="Email" id="username" placeholder="Email">
      </div><br><br>
      <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="Password" id="password" placeholder="Password">
      </div><br><br>
      <div class="input-group">
         <span class="input-group-addon">Mobile-No</span>
          <input type="name" maxlength="10" class="form-control" name="phoneno" id="phoneno" placeholder="Mobile-No" required>
      </div>
      <br><br>

      <select id="category" name="category" class="form-control" required>
                        <option value="">--Select the option--</option>
                      <option value="3">Educom Commitee</option>
                      <option value="4">Admin</option>

                    </select>
    <br><br>		
        <input type="submit" class="btn btn-primary" value="ADD">
      
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