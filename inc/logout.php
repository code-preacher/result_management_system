

<?php
session_start();
$_SESSION['login']=="";
session_unset();
$_SESSION['msg']='<span style="color:#5cb85c;font-family:trebuchet ms;">'."You have successfully logged out".'</span>';

header("Location: ../index.php"); // Redirecting To Home Page

?>



