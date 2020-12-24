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

$mt=mysqli_query($con,"select * from course_reg where matno='$mt' ");
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
              <li class="breadcrumb-item active">View Registration</li>
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
              <h3 class="card-title">View all Registration</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"><div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Matric No</th>
                  <th>Level</th>
                  <th>Semester</th>
                  <th>Course 1</th>
                  <th>Course 2</th>
                  <th>Course 3</th>
                  <th>Course 4</th>
                  <th>Other 1</th>
                  <th>Other 2</th>
                  
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
                    <td><?php echo $dy['matno']; ?></td>
                    <td><?php echo $dy['level']; ?></td>
                    <td><?php echo $dy['semester']; ?></td>
                    <td><?php echo $dy['c1']; ?></td>
                    <td><?php echo $dy['c2']; ?></td>
                    <td><?php echo $dy['c3']; ?></td>
                     <td><?php echo $dy['c4']; ?></td>
                    <td><?php echo $dy['o1']; ?></td>
                    <td><?php echo $dy['o2']; ?></td>
                 
                    <td><?php echo $dy['date']; ?></td>
                 </i></a></td>
                    
                  </tr>

                <?php }  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Matric No</th>
                  <th>Level</th>
                  <th>Semester</th>
                  <th>Course 1</th>
                  <th>Course 2</th>
                  <th>Course 3</th>
                  <th>Course 4</th>
                  <th>Other 1</th>
                  <th>Other 2</th>
                  
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