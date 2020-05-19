<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
	}
	$conn->beginTransaction();
	$updateqry="Update bloodbankdetails set bloodbankname=?,address=?,contactno=? where bloodbankid=?";
	$pre=$conn->prepare($updateqry);
	$data=array($_POST['bloodbankname'],$_POST['address'],$_POST['cno'],$_POST['bloodbankid']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Successfully Edited Blood Bank Details";
		session_write_close();
		header("Location:editbloodbankprofile.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Edit Blood Bank Details";
		session_write_close();
		header("Location:editbloodbankprofile.php");
	}
?>