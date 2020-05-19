<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$activeqry="select activestatus from bloodbankdetails where bloodbankid=".$_GET['id'];
	$activestatusdata=$conn->query($activeqry);
	foreach($activestatusdata as $activestatusvalue)
	{
		$activestatus=$activestatusvalue['activestatus'];
	}
	if($activestatus=='Inactive')
	{
	
	$statusqry="update bloodbankdetails set activestatus=? where bloodbankid=?";
	$status="Active";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Activated";
		session_write_close();
		header("Location:bloodbankdetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:bloodbankdetails.php");
	}
	}
	else{
		$statusqry="update bloodbankdetails set activestatus=? where bloodbankid=?";
	$status="Inactive";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Inactive";
		session_write_close();
		header("Location:bloodbankdetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:bloodbankdetails.php");
	}
	}
	
?> 