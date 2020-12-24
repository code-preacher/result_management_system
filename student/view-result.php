<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();

?>
<?php
include '../inc/config.php';
$sd=mysqli_query($con,"SELECT * FROM student WHERE email='".$_SESSION['email']."'");
$ds=mysqli_fetch_array($sd); 
$mt=$ds['matno'];

$mt=mysqli_query($con,"select * from result where matno='$mt' ");
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
              <li class="breadcrumb-item active">View Result</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View all Result</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"><div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Level</th>
                  <th>Semester</th>
                  <th>Tce</th>
                  <th>Gp</th>
                  <th>Cgpa</th>
                  <th>Date</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php
                $r=0;
while ($dy=$mt->fetch_array()) {
  $r++;
         ?>
                  <tr>
                    <td><?php echo $r; ?></td>
                    <td><?php echo $dy['level']; ?></td>
                    <td><?php echo $dy['semester']; ?></td>
                    <td><?php echo $dy['tce']; ?></td>
                    <td><?php echo $dy['gp']; ?></td>
                    <td><?php echo $dy['cgpa']; ?></td>
                 
                    <td><?php echo $dy['date']; ?></td>
                 </i></a></td>
                    
                  </tr>

                <?php }  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Level</th>
                  <th>Semester</th>
                  <th>Tce</th>
                  <th>Gp</th>
                  <th>Cgpa</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body --></div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
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