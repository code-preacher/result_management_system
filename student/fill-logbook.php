<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
 include('../inc/config.php');

$sd=mysqli_query($con,"SELECT * FROM student WHERE email='".$_SESSION['email']."'");
$ds=mysqli_fetch_array($sd); 
$mt=$ds['matno'];
$lv=$ds['level'];
$sm=$ds['semester'];


if(isset($_POST['submit'])){
extract($_POST);
$date=date("d-m-y @ g:i A");

$zd=mysqli_query($con,"SELECT level,semester FROM course_reg WHERE matno='$mt' and level='$lv' and semester='$sm' ");
$zz=$zd->fetch_array();

if ($zz>0) {
$_SESSION['gmsg']='<span style="color:#000;">'."Data for this semester was already taken".'</span>'; 
} 
else {

$ql=mysqli_query($con,"insert into course_reg(matno,level,semester,c1,c2,c3,c4,o1,o2,date) values('$mt','$lv','$sm','$c1','$c2','$c3','$c4','$o1','$o2','$date')");

if($ql){
$_SESSION['gmsg']='<span style="color:#fff;">'."Semester Data was successfully Added".'</span>';
}
else{
$_SESSION['gmsg']='<span style="color:#000;">'."Semester Data was not successfully Added".'</span>';    
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
      <div class="container-fluid  bg-dark">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course Registration</li>
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
                <h3 class="card-title">Register Course  :
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php
        if (!empty($_SESSION['gmsg'])) {
           echo $_SESSION['gmsg'];
           $_SESSION['gmsg']="";
         } 
        ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form role="form"  method="post">
                <div class="card-body">
                  <div class="row">

                     <div class="col-sm-3">
                  <div class="form-group">
                    <label>Select Course 1:</label>
                    
                    <select class="form-control" name="c1" required="required">

 <?php 
$bc=mysqli_query($con,"select name from course");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['name'] ?>"><?php echo $e['name'] ?></option>

  <?php } ?>
               
                    </select>
                  </div>
                </div>



 <div class="col-sm-3">
                  <div class="form-group">
                    <label>Select Course 2:</label>
                    
                    <select class="form-control" name="c2" required="required">

 <?php 
$bc=mysqli_query($con,"select name from course");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['name'] ?>"><?php echo $e['name'] ?></option>

  <?php } ?>
               
                    </select>
                  </div>
                </div>


 <div class="col-sm-3">
                  <div class="form-group">
                    <label>Select Course 3:</label>
                    
                    <select class="form-control" name="c3" required="required">

 <?php 
$bc=mysqli_query($con,"select name from course");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['name'] ?>"><?php echo $e['name'] ?></option>

  <?php } ?>
               
                    </select>
                  </div>
                </div>


                 <div class="col-sm-3">
                  <div class="form-group">
                    <label>Select Course 4:</label>
                    
                    <select class="form-control" name="c4" required="required">

 <?php 
$bc=mysqli_query($con,"select name from course");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['name'] ?>"><?php echo $e['name'] ?></option>

  <?php } ?>
               
                    </select>
                  </div>
                </div>


                 <div class="col-sm-3">
                  <div class="form-group">
                    <label>Select Other 1:</label>
                    
                    <select class="form-control" name="o1" required="required">

 <?php 
$bc=mysqli_query($con,"select name from course");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['name'] ?>"><?php echo $e['name'] ?></option>

  <?php } ?>
               
                    </select>
                  </div>
                </div>

                 <div class="col-sm-3">
                  <div class="form-group">
                    <label>Select Other 2:</label>
                    
                    <select class="form-control" name="o2" required="required">

 <?php 
$bc=mysqli_query($con,"select name from course");
while($e=mysqli_fetch_array($bc)){

    ?>
    <option value="<?php echo $e['name'] ?>"><?php echo $e['name'] ?></option>

  <?php } ?>
               
                    </select>
                  </div>
                </div>
                

                
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary col-md-3" name="submit">Register</button>
                 
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