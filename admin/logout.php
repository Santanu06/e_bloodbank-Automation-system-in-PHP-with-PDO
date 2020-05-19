<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	session_destroy();
	unset($_SESSION['id']);
	header('Location:../adminlogin.php');
?>