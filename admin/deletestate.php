<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$deleteqry="DELETE FROM statedetails WHERE stateid=?";
	$pre=$conn->prepare($deleteqry);
	$data=array($_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="State Deleted Successfully";
		session_write_close();
		header('Location:statedetails.php');
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Delete State";
		session_write_close();
		header('Location:statedetails.php');
	}
?>