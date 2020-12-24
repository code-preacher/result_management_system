<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
 include('../inc/config.php');

$sd=mysqli_query($con,"SELECT * FROM logbook WHERE id='".$_GET['id']."' and matno='".$_GET['matno']."'");
$mt=mysqli_fetch_array($sd); 
$mat=$mt['matno'];
$wk=$mt['week'];
$id=$mt['id'];

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
              <li class="breadcrumb-item active">Logbook Update</li>
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
                <h3 class="card-title">Update Logbook Data  :
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php
        if (!empty($_SESSION['tmsg'])) {
           echo $_SESSION['tmsg'];
           $_SESSION['tmsg']="";
         } 
        ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form role="form"  method="post" action="ucpass.php?mat=<?php echo $mat; ?>&wk=<?php echo $wk; ?>&id=<?php echo $id; ?>">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputName">Week :</label>
                    
                    <select class="form-control" name="week" required="required" disabled="disabled">

                      <option value="<?php echo $mt['week'];?>">----------Selected week is : <?php echo $mt['week'];?>----------</option>

                     
                    </select>
                  </div>
                </div>
     
<div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputDay">Monday:</label>
                    <input type="text" name="monday" class="form-control" id="exampleInputDay" value="<?php echo $mt['monday'];?>" required="required">
                  </div>
            </div>      
<div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tuesday :</label>
                    <input type="text" name="tuesday" class="form-control" id="exampleInputDay" value="<?php echo $mt['tuesday'];?>"required="required">
                  </div>
              </div>
              
   <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Wednesday :</label>
                    <input type="text" name="wednesday" class="form-control" id="exampleInputDay" value="<?php echo $mt['wednesday'];?>" required="required">
                  </div>
              </div>

<div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thursday :</label>
                    <input type="text" name="thursday" class="form-control" id="exampleInputDay" value="<?php echo $mt['thursday'];?>" required="required">
                  </div>
              </div>
<div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Friday :</label>
                    <input type="text" name="friday" class="form-control" id="exampleInputDay" value="<?php echo $mt['friday'];?>" required="required">
                  </div>
              </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Saturday :</label>
                    <input type="text" name="saturday" class="form-control" id="exampleInputDay" value="<?php echo $mt['saturday'];?>" required="required">
                  </div>
              </div>
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary col-md-3" name="submit">Submit Data</button>
                 
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