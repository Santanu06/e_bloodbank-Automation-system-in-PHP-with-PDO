<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$updatestate="UPDATE statedetails SET statename=? WHERE stateid=?";
	$pre=$conn->prepare($updatestate);
	$data=array($_POST['statename'],$_POST['stateid']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully edited State";
		session_write_close();
		header('Location:statedetails.php');
	}
	else {
		$conn->rollback();
		$_SESSION['em']="Failed to edit state";
		session_write_close();
		header('Location:editstate.php');
	}