<?php 
	include 'connectionstring.php';
	if(isset($_POST['id'])){
	}else{
		header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$statusquery="Select activestatus from donoredetails where donorid=".$_GET['id'];
	$statusdata=$conn->query($statusquery);
	foreach($statusdata as $statusvalue){
		$activestatus=$statusvalue['activestatus'];
	}
	if($activestatus=='Inactive'){
	
	$statusqry="update donoredetails set activestatus=? where donorid=?";
	$status="Active";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Activated";
		session_write_close();
		header("Location:viewdonor.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:viewdonor.php");
	}
	}
	else{
		$statusqry="update donoredetails set activestatus=? where donorid=?";
	$status="Inactive";
	$pre=$conn->prepare($statusqry);
	$data=array($status,$_GET['id']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Inactive";
		session_write_close();
		header("Location:viewdonor.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Active status";
		session_write_close();
		header("Location:viewdonor.php");
	}
	}	
	
?>