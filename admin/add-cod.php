<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
?>
<?php
include '../inc/config.php';
if(isset($_POST['submit'])){
extract($_POST);
$date=date("d-m-y @ g:i A");

$rf=mysqli_query($con,"select matno,semester from result where matno='$matno' and level='$level' ");
$rd=mysqli_fetch_array($rf);

if ($rd) {
$_SESSION['bmsg']='<span style="color:#fff;">'."Result was already added before....".'</span>';

}
else{
$da=mysqli_query($con,"insert into result(matno,semester,level,tce,gp,cgpa,date) values('$matno','$semester','$level','$tce','$gp','$cgpa','$date')");
if ($da) {

$_SESSION['bmsg']='<span style="color:#fff;">'."Result added successfully....".'</span>';

} else {
  $_SESSION['bmsg']='<span style="color:#000;">'."Error in adding Result....".'</span>';

}

}

}


?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 bg-dark">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Result</li>
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
                <h3 class="card-title">Add Result : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php if (!empty($_SESSION['bmsg'])) {
          echo $_SESSION['bmsg'];
          $_SESSION['bmsg']="";
        }  ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">

                     <div class="col-sm-6">
                  <div class="form-group">
                    <label>Matriculation Number :</label>
   <select name="matno" class="form-control" required="required">
    <?php 
$bc=mysqli_query($con,"select matno from student");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['matno'] ?>"><?php echo $e['matno'] ?></option>

  <?php } ?>
                      
                    </select>
                  </div>
              </div>


 <div class="col-sm-6">
                  <div class="form-group">
                    <label>Semester :</label>
   <select name="semester" class="form-control" required="required">
    <option value="FIRST">FIRST</option>
    <option value="SECOND">SECOND</option>
   
                      
                    </select>
                  </div>
              </div>


                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Level :</label>
   <select name="level" class="form-control" required="required">
    <option value="ND1">ND1</option>
    <option value="ND2">ND2</option>
    <option value="HND1">HND1</option>
    <option value="HND2">HND2</option>
                      
                    </select>
                  </div>
              </div>




      <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampletce">TCE :</label>
                    <input type="text" name="tce" class="form-control" id="exampletce" placeholder="Please enter tce" required="required">
                  </div>
                </div>


                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="examplegp">GP :</label>
                    <input type="text" name="gp" class="form-control" id="examplegp" placeholder="Please enter gp" required="required">
                  </div>
                </div>


                 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="examplecgp">CGPA :</label>
                    <input type="text" name="cgpa" class="form-control" id="examplegp" placeholder="Please enter cgpa" required="required">
                  </div>
                </div>

               




                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary col-md-3" name="submit">Add</button>
                  <button type="reset" class="btn btn-danger col-md-3">Clear</button>
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
   <br/><br/>
  <?php
include 'inc/footer.php';
?>