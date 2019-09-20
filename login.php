<?php 

require 'login-process.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php' ?>
  <title>Eventure - Login</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">Sign In</div>
        </div>

        <div style="padding-top:30px" class="panel-body">

          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

          <form action="login.php" method="post" id="loginform" class="form-horizontal" role="form">

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="login-username" type="text" class="form-control" name="userEmail" value=""
                placeholder="Email">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="userPassword" placeholder="Password">
            </div>



            <div class="input-group">
              <div class="checkbox">
                <label>
                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                </label>
              </div>
            </div>


            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 control">
              <button type="submit" name="login" class="btn btn-info btn-block" id="btn-login">Login</button>

              </div>
            </div>


            <div class="form-group">
              <div class="col-md-12 control">
                  Don't have an account?
                  <a href="register.php">
                    Sign Up Here
                  </a>
                </div>
              </div>
            </div>
          </form>



        </div>
      </div>
    </div>
  </div>
</body>

</html>