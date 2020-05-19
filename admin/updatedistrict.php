<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$updatedist="Update districtdetails set districtname=? Where districtid=?";
	$pre=$conn->prepare($updatedist);
	$data=array($_POST['districtname'],$_POST['districtid']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Edited District name";
		session_write_close();
		header("Location:districtdetails.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to edit District Name";
		session_write_close();
		header("Location:editdistrict.php");
	}
?>