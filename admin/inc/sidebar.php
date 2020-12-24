<?php

$sd=mysqli_query($con,"SELECT name FROM admin WHERE email='".$_SESSION['email']."'");
$ds=mysqli_fetch_array($sd);
?>

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/logo.png" alt="Naites Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CRRCS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/avatar3.png" class="img-circle elevation-2" alt="Kate Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hello, <?php echo $ds['name'];  ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          



<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Student
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-student.php" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                 <p>View Student</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Courses
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-sup.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-sup.php" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                 <p>View Course</p>
                </a>
              </li>
            </ul>
          </li>

<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Result
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-cod.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Result</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view-cod.php" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                 <p>View Result</p>
                </a>
              </li>
            </ul>
          </li>

<li class="nav-item">
                <a href="view-log.php" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>View Student Registration</p>
                </a>
              </li>

           <li class="nav-item">
                <a href="profile.php" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>



               <li class="nav-item">
                <a href="../inc/logout.php" class="nav-link" onClick="return confirm('Are you sure you want to Logout?')">
                  <i class="fa fa-sign-out nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>


          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
