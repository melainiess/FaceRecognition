<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if session variables exist
if (isset($_SESSION['role']) && isset($_SESSION['id'])) {
    if ($_SESSION['role'] == "Super Administrator") {
        $sa_info = mysqli_query($conn, "SELECT * FROM tbl_superadmin WHERE mk_id = '".$_SESSION['id']."'");
        $row = mysqli_fetch_array($sa_info);

    } elseif ($_SESSION['role'] == "Teacher") {
        $teacher_info = mysqli_query($conn, "SELECT * FROM tbl_teachers WHERE teacher_id = '".$_SESSION['id']."'");
        $row = mysqli_fetch_array($teacher_info);

    } elseif ($_SESSION['role'] == "Student") {
        $student_info = mysqli_query($conn, "SELECT * FROM tbl_students WHERE student_id = '".$_SESSION['id']."'");
        $row = mysqli_fetch_array($student_info);
    }
} else {
    // Handle the case where session variables are not set
    echo "User not logged in or session variables not set.";
}
?>




<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo" href="index.php"><img src="../../assets/images/sfac1.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../../assets/images/sfac.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-text">
                <?php echo $_SESSION['name']; ?>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../login/userData/ctrl.logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
</nav>