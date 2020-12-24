<?php
function checkLogin()
{
	if($_SESSION['login']=="")
	{	
	$_SESSION['msg']='<span style="color:#d9534f;font-family:trebuchet ms;">'."You must login to access requested page...".'</span>';	
		header("Location: ../index.php");
	}

}

?>