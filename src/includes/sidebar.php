<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    
        <?php
          if ($_SESSION['role'] == "Super Administrator") { /////////////////////// Super Administrator sidebar
        ?>
          <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
         <i class="mdi mdi-home menu-icon"></i>
      </a>
     </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
              <span class="menu-title">User List</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="pages/dashboard/form.php">Admin List</a>
                </li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="pages/dashboard/form.php">Teachers List</a>
                </li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="pages/dashboard/form.php">Student List</a>
                </li>
              </ul>
            </div> 
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
              <span class="menu-title">Add User</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="pages/dashboard/form.php">Add Administrator</a>
                </li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="../super_admin/add.teacher.php">Add Teacher</a>
                </li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="../super_admin/add.student.php">Add Student</a>
                </li>
              </ul>
            </div>
          </li>

        <?php
          } elseif ($_SESSION['role'] == "Teacher") { /////////////////////// Teacher sidebar
        ?> 
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
              <span class="menu-title">Attendance</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <span class="menu-title">Student</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
        <?php
          } elseif ($_SESSION['role'] == "Student") { /////////////////////// Teacher sidebar
            ?> 
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
                  <span class="menu-title">Attendance Summary</span>
                  <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <span class="menu-title">Student Info</span>
                  <i class="mdi mdi-table-large menu-icon"></i>
                </a>
              </li>
            <?php
            } 
            ?>
        
  </ul> 
</nav>
            