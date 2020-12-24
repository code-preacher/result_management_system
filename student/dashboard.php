<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
include '../inc/config.php';
?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid bg-dark">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
<?php 
$xn=mysqli_query($con,"select * from student");
$nx=mysqli_num_rows($xn);
echo $nx;

?>
                </h3>

                <p>All Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp;</a>
            </div>
          </div>
          <!-- ./col -->
          
<div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
&nbsp;
                </h3>

                <p>My Profile</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i><i class="fa fa-user"></i>
              </div>
              <a href="profile.php" class="small-box-footer">View profile <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


<div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
&nbsp;
                </h3>

                <p>Logout</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i><i class="fa fa-sign-out"></i>
              </div>
              <a href="../inc/logout.php" class="small-box-footer" onClick="return confirm('Are you sure you want to Logout?')">Logout <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


        </div>
        <!-- /.row -->
        
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <?php
include 'inc/footer.php';
?>