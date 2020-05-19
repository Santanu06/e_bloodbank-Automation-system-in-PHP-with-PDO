<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$deleteqry="Delete from bloodbankdetails where bloodbankid=?";
	$pre=$conn->prepare($deleteqry);
	$data=array($_GET['name']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Blood Bank successfully deleted";
		session_write_close();
		header('Location:bloodbankdetails.php');
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Delete Blood Bank";
		session_write_close();
		header('Location:bloodbankdetails.php');
	}
?>