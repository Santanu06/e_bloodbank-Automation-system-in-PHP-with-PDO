<?php 
	include 'connectionstring.php';
	$conn->beginTransaction();
	$activeqry="select status from  statedetails where stateid=".$_GET['id'];
	$activestatusdata=$conn->query($activeqry);
	foreach($activestatusdata as $activestatusvalue)
	{
		$activestatus=$activestatusvalue['status'];
	}
	if($activestatus=='Inactive')
	{
	
	$statusqry="update statedetails set status=? where stateid=?";
	$status="Active";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Activated";
		session_write_close();
		header("Location:statedetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:statedetails.php");
	}
	}
	else{
		$statusqry="update statedetails set status=? where stateid=?";
	$status="Inactive";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Inactive";
		session_write_close();
		header("Location:statedetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:statedetails.php");
	}
	}
	
?> 
?>