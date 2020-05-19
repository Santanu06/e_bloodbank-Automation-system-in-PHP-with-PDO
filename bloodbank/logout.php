<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
	}
	session_destroy();
	unset($_SESSION['bbid']);
	header("Location:../bloodbanklogin.php");
?>