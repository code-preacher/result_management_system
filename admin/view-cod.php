<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();

?>
<?php
include '../inc/config.php';
$mt=mysqli_query($con,"select * from result");
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
              <h3 class="card-title">View all Co-ordinator </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"><div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Matric No</th>
                  <th>Semester</th>
                  <th>Level</th>
                  <th>Tce</th>
                  <th>Gp</th>
                  <th>Cgpa</th>
                  <th>Date</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
while ($dy=$mt->fetch_array()) {
         ?>
                  <tr>
                    <td><?php
                    $vc=mysqli_query($con,"select name from student where matno='".$dy['matno']."'") ;
                    $tx=mysqli_fetch_array($vc);

                    echo $tx['name']; 
                    ?></td>
                 
                    <td><?php echo $dy['matno']; ?></td>
                    <td><?php echo $dy['semester']; ?></td>
                    <td><?php echo $dy['level']; ?></td>
                    <td><?php echo $dy['tce']; ?></td>
                    <td><?php echo $dy['gp']; ?></td>
                    <td><?php echo $dy['cgpa']; ?></td>
                    <td><?php echo $dy['date']; ?></td>
                   
                    <td><a href="del-cd.php?id=<?php echo $dy['id']; ?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash"></i></a></td>
                  </tr>

                <?php }  ?>
                </tbody>
                <tfoot>
                <tr>
                   <th>Name</th>
                  <th>Matric No</th>
                  <th>Semester</th>
                  <th>Level</th>
                  <th>Tce</th>
                  <th>Gp</th>
                  <th>Cgpa</th>
                  <th>Date</th>
                  <th>Delete</th>
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