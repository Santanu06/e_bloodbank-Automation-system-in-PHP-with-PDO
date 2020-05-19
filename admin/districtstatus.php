<?php 
	include 'connectionstring.php';
	$conn->beginTransaction();
	$activeqry="select districtstatus from districtdetails where districtid=".$_GET['id'];
	$activestatusdata=$conn->query($activeqry);
	foreach($activestatusdata as $activestatusvalue)
	{
		$activestatus=$activestatusvalue['districtstatus'];
	}
	if($activestatus=='Inactive')
	{
	
	$statusqry="update districtdetails set districtstatus=? where districtid=?";
	$status="Active";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Activated";
		session_write_close();
		header("Location:districtdetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:districtdetails.php");
	}
	}
	else{
		$statusqry="update districtdetails set districtstatus=? where districtid=?";
	$status="Inactive";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Inactive";
		session_write_close();
		header("Location:districtdetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:districtdetails.php");
	}
	}
	
?> 
?>