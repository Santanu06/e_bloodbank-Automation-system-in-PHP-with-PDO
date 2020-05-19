<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['mbid'])){
	}
	else
	{
	header('Location:../memberlogin.php');
	}
	$conn->beginTransaction();
	$donorpswd="select password from donoredetails where donorid=".$_SESSION['mbid'];
	$donorpswddata=$conn->query($donorpswd);
	foreach($donorpswddata as $donorpswdvalue){
		$changepswd=$donorpswdvalue['password'];
	}
	if($changepswd==$_POST['oldpswd']){
		$newpswd="Update donoredetails set password=? where donorid=?";
		$pre=$conn->prepare($newpswd);
		$data=array($_POST['newpassword'],$_SESSION['mbid']);
		$status=$pre->execute($data);
		if($status==true){
			$conn->commit();
			$_SESSION['sm']="Password successfully changed";
			session_write_close();
			header("Location:changedonorpassword.php");
		}else{
			$conn->rollback();
			$_SESSION['em']="Failed to change Password";
			session_write_close();
			header("Location:changedonorpassword.php");
		}
	}
?>
