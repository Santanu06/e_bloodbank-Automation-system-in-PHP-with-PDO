<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$updatebbank="update bloodbankdetails set bloodbankname=? where bloodbankid=?";
	$pre=$conn->prepare($updatebbank);
	$data=array($_POST['bbankname'],$_POST['bloodbankid']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Updated Bloodbank Name";
		session_write_close();
		header('Location:bloodbankdetails.php');
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Edit Bloodbank Name";
		session_write_close();
		header('Location:editbloodbank.php');
	}
?>