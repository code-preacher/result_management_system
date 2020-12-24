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

$da=mysqli_query($con,"insert into course(name,unit,level,date) values('$name','$unit','$level','$date')");
if ($da) {

$_SESSION['smsg']='<span style="color:#fff;">'."Course Data added successfully....".'</span>';

} else {
  $_SESSION['smsg']='<span style="color:#000;">'."Error in adding Course....".'</span>';

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
              <li class="breadcrumb-item active">Add Course</li>
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
                <h3 class="card-title">Add Course : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php if (!empty($_SESSION['smsg'])) {
          echo $_SESSION['smsg'];
          $_SESSION['smsg']="";
        }  ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="#" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputName">Course name :</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Please enter your course name" required="required">
                  </div>
                </div>
      
              
              <div class="col-sm-6">    
                  <div class="form-group">
                    <label for="exampleInputPhone">Course :</label>
                    <input type="number" name="unit" class="form-control" id="exampleInputPhone" placeholder="Please enter course credit unit" required="required">
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