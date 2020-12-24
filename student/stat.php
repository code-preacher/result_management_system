<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();

?>
<?php
include '../inc/config.php';
$mt=mysqli_query($con,"select * from stat where matno='".$_GET['matno']."' ");
$kt=$mt->fetch_array();
$s=$kt['supervisor'];
$c=$kt['coordinator'];
$h=$kt['hod'];
?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid bg-dark">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Status</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

<?php 
if ($s=='1') { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-weight: bolder;">
Approved
                </h4>

                <p>Supervisor</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa  fa-check-circle"></i></a>
            </div>
          </div>
          <!-- ./col -->

<?php } 
else { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
            <h4 style="font-weight: bolder;">
Not Approved
                </h4>

                <p>Supervisor</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-remove"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa fa-remove"></i></a>
            </div>
          </div>
          <!-- ./col -->


<?php } ?>

<?php 
if ($c=='1') { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-weight: bolder;">
Approved
                </h4>

                <p>Co-ordinator</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa  fa-check-circle"></i></a>
            </div>
          </div>
          <!-- ./col -->

<?php } 
else { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
            <h4 style="font-weight: bolder;">
Not Approved
                </h4>

                <p>Co-ordinator</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-remove"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa fa-remove"></i></a>
            </div>
          </div>
          <!-- ./col -->


<?php } ?>


<?php 
if ($h=='1') { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-weight: bolder;">
Approved
                </h4>

                <p>HOD</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa  fa-check-circle"></i></a>
            </div>
          </div>
          <!-- ./col -->

<?php } 
else { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
            <h4 style="font-weight: bolder;">
Not Approved
                </h4>

                <p>HOD</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-remove"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa fa-remove"></i></a>
            </div>
          </div>
          <!-- ./col -->


<?php } ?>



<?php 
if ($s=='1' && $c=='1' && $h=='1') { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-weight: bolder;">
Certified
                </h4>

                <p>Result</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-check"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa  fa-check-circle"></i></a>
            </div>
          </div>
          <!-- ./col -->

<?php } 
else { ?>
<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
            <h4 style="font-weight: bolder;">
Not Certified
                </h4>

                <p>Result</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-remove"></i>
              </div>
              <a href="#" class="small-box-footer">&nbsp; <i class="fa  fa-remove"></i></a>
            </div>
          </div>
          <!-- ./col -->


<?php } ?>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <br/><br/>
  <?php
include 'inc/footer.php';
?>