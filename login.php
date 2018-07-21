<?php

include_once 'header.php';

?>

        <form class="col s12" method="POST" action="log.php">
            <div class="row card container col s6 offset-s3"><br>
                <div class="input-field col s12"><input class="validate" id="username" name="username" type="text" required><label for="username">Email Id</label></div>
                <div class="input-field col s12"><input class="validate" id="password" name="password" type="password" required><label for="password">Password</label></div>
                <div class="input-field col s12"><input class="btn" type="submit" value="Login"></div>
            </div>
        </form>
    </div>
    
<?php

include_once 'footer.php';

?>
