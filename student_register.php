<?php
include_once 'header.php';
?>
        <form class="col s12" method="POST" action="action_page.php" id="formwrap">
            <div class="row card container col s6 offset-s3"><br>
                <div class="input-field col s12"><input class="validate" id="email" name="email" type="email" required><label for="email">Email</label></div>
                <div class="input-field col s12"><input class="validate" id="password" name="password" type="password" required><label for="password">Password</label></div>
                <div class="input-field col s12"><input class="validate" id="phoneno" name="phoneno" type="text" required><label for="password">Phone No</label></div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Category</label>
                  <div class="col-md-6">
                    <select id="category" name="category" class="form-control" required>
                        <option value="">Select</option>
                      <option value="1">Student</option>
                      <option value="2">Donor</option>

                    </select>
                  </div>
                </div>
                <div class="input-field col s12"><input class="btn" name="uregister" type="submit" value="Register"></div><br></div>
        </form>
    </div>
    <?php
include_once 'footer.php';
?>