<?php
include_once 'header.php';
?>
    <div class="login">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
    <ul class="list-group">
      <li class="list-group-item text-center">
        <h2>Login </h2><br><br>
        
        <form name="reg" method="post" action="log1.php">
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="email" class="form-control" name="username" id="username" placeholder="Email">
      </div><br><br>
      <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
      </div><br><br>
        <input type="submit" class="btn btn-primary" value="Login">
      
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