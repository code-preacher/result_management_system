<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
?>
<?php
include '../inc/config.php';
$gt=mysqli_query($con,"select * from student where id='".$_GET['id']."'");
$kt=$gt->fetch_array();
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
              <li class="breadcrumb-item active">Student Detail</li>
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
                <h3 class="card-title">Student Details </h3>
              </div>
              <!-- /.card-header -->
              
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      
                  <div class="form-group">
                    <label for="exampleInputName">Fullname :</label>
                    <?php echo $kt['name'];?>
                  </div>
               
              
                  <div class="form-group">
                    <label for="exampleInputMatno">Matric number :</label>
                    <?php echo $kt['matno'];?>
                  </div>
             
         
                  <div class="form-group">
                    <label for="exampleInputPassword">Password :</label>
                    <?php echo $kt['password'];?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address :</label>
                  <?php echo $kt['email'];?>
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputPhone">Phone Number :</label>
                   <?php echo $kt['phoneno'];?>
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputCompanyName">Company of Industrial Attachment :</label>
                    <?php echo $kt['cname'];?>
                  </div> 

                  <div class="form-group">
                     <label for="exampleInputCompanyName">Address Company of Industrial Attachment :</label>
                    <?php echo $kt['caddress'];?>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputCompanyName">Specialization Company of Industrial Attachment :</label>
                   <?php echo $kt['cspecialization'];?>
                  </div>

                   <div class="form-group">
                     <label for="exampleInputCompanyName">Date Created :</label>
                   <?php echo $kt['date'];?>
                  </div>


                </div> 

<div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
                <div class="form-group">
   <label for="exampleInputFile">Student Image:</label><br/>
                  <img src="studentimages/<?php echo $kt['image'];?>" alt="Student Image" class="img-responsive img-rounded" style="width:500px;height: inherit;"/>
                </div>
              </div>
            </div>


                </div>

                </div>
                <!-- /.card-body -->

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