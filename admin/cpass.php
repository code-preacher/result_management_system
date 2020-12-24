<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
 include('../inc/config.php');

if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];


$ql=mysqli_query($con,"update admin set name='$name',email='$email',password='$password' where email='".$_SESSION['email']."'");

if($ql){
$_SESSION['pmsg']='<span style="color:#fff;">'."Data was successfully updated".'</span>';
$_SESSION['email']=$email;
}
else{
$_SESSION['pmsg']='<span style="color:#000;">'."Data was not successfully updated".'</span>';    
}
}

header("location:profile.php");
?>