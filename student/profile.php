<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php'); 
$fd=mysqli_query($con,"SELECT * FROM student WHERE email='".$_SESSION['email']."'");
$fg=mysqli_fetch_array($fd);
?>



<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid  bg-dark">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
          <div class="col-md-12">
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">My Profile  :
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php
        if (!empty($_SESSION['pmsg'])) {
           echo $_SESSION['pmsg'];
           $_SESSION['pmsg']="";
         } 
        ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form role="form" action="cpass.php" method="post">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                 
     
<div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputPassword">Password :</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword" value="<?php echo $fg['password'] ?>" required="required">
                  </div>
            </div>      
<div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address :</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $fg['email'] ?>" required="required">
                  </div>
              </div>
              



                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary col-md-3" name="submit">Update</button>
                 
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
       </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <br/><br/>
  <?php
include 'inc/footer.php';
?>