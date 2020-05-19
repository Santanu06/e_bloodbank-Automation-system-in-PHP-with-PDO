<?php
	include 'connectionstring.php';
	if(isset($_SESSION['mbid'])){
	}
	else
	{
	header('Location:../memberlogin.php');
	}
	session_destroy();
	unset($_SESSION['mbid']);
	header("Location:../memberlogin.php");
?>