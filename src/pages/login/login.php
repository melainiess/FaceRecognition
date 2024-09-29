<?php
require '../../includes/conn.php';
ob_start();
session_start();
if (isset($_SESSION['role'])) {
    header("location: pages/dashboard/index.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Attendance Management System | Log in </title>
    <!-- plugins:css -->
    <?php include '../../includes/links.php'; ?>
    <style>
        body {
            background-image: url('../../assets/images/sfac.jpg'); /* Update the path to your image */
            background-size: cover; /* Cover the entire background */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating */
        }
    </style>
  </head>
  <body>
    
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../../assets/images/sfac1.png">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form action="userData/ctrl.login.php" method="POST">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                </div>
                <!-- /.col -->
                <div class="mt-3 d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-block btn-lg font-weight-medium auth-form-btn" style="background-color: #cc3333; color: white;">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
              <p class="mb-1">
                <a href="forgot.password.php">I forgot my password</a>
              </p>
            </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php include '../../includes/script.php'; ?>


    <?php
if (isset($_SESSION['password_incorrect'])) {
  echo "<script>
    $(function() {
      toastr.error('Password is incorrect.','Error')
    });
    </script>";
} elseif (isset($_SESSION['username_incorrect'])) {
  echo "<script>
    $(function() {
      toastr.error('Username is incorrect.','Error')
    });
    </script>";
}
session_destroy();

?>
  </body>
</html>