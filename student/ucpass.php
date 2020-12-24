<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
$mat=$_GET['mat'];
$wk=$_GET['wk'];
$id=$_GET['id'];

 include('../inc/config.php');

$sd=mysqli_query($con,"SELECT * FROM logbook WHERE id='".$_GET['id']."' and matno='".$_GET['mat']."'");
$mt=mysqli_fetch_array($sd); 
$mat=$mt['matno'];
$wk=$mt['week'];

if(isset($_POST['submit'])){
extract($_POST);
$date=date("d-m-y @ g:i A");


$ql=mysqli_query($con,"update logbook set matno='".$_GET['mat']."',week='$wk',monday='$monday',tuesday='$tuesday',wednesday='$wednesday',thursday='$thursday',friday='$friday',saturday='$saturday' where id='".$_GET['id']."' and matno='".$_GET['mat']."'");

if($ql){
$_SESSION['tmsg']='<span style="color:#fff;">'."Logbook Data was successfully Updated".'</span>';
}
else{
$_SESSION['tmsg']='<span style="color:#000;">'."Logbook Data was not successfully Updated".'</span>';    
}
header("location:edit-log.php?id=$id?&matno=$mat");

}

?>