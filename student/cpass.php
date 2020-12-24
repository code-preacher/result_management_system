<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
 include('../inc/config.php');

if(isset($_POST['submit'])){
extract($_POST);

$ql=mysqli_query($con,"update student set password='$password',email='$email' where email='".$_SESSION['email']."'");

if($ql){
$_SESSION['pmsg']='<span style="color:#fff;">'."Student Data was successfully updated".'</span>';
$_SESSION['email']=$email;
}
else{
$_SESSION['pmsg']='<span style="color:#000;">'."Student Data was not successfully updated".'</span>';    
}
}

header("location:profile.php");

?>