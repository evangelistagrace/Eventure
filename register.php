<?php

require 'register-process.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php' ?>
  <title>Eventure - Register</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
  <div class="container">

    <div id="signupbox" style="margin-top:50px"
      class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">Sign Up</div>
          <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink"
              href="login.php">Sign In</a></div>
        </div>
        <div class="panel-body">
          <form id="signupform" class="form-horizontal" role="form" action="register.php" method="post">

          <?php include('errors.php') ?>
            
            <div class="form-group">
              <label for="userName" class="col-md-3 control-label">Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="userName" placeholder="Name" required>
              </div>
            </div>

            <div class="form-group">
              <label for="userEmail" class="col-md-3 control-label">Email</label>
              <div class="col-md-9">
                <input type="email" class="form-control" name="userEmail" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="userPassword" class="col-md-3 control-label">Password</label>
              <div class="col-md-9">
                <input type="password" class="form-control" name="userPassword1" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group">
              <label for="userPassword2" class="col-md-3 control-label">Confirm Password</label>
              <div class="col-md-9">
                <input type="password" class="form-control" name="userPassword2" placeholder="Confirm Password" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-offset-3 col-md-9">
              <button type="submit" name="register" class="btn btn-info btn-block" id="btn-signup">Register</button>
              </div>
            </div>

          </form>
        </div>
      </div>




    </div>
  </div>
</body>

</html>