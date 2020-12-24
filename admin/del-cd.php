<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
?>

<?php
include '../inc/config.php';
$j=mysqli_query($con,"delete from result where id='".$_GET['id']."'");
 if ($j) {
 header("location:view-cod.php");
 } else {
 header("location:view-cod.php");
 }
 


?>


