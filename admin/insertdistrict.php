<?php
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$insertqry="INSERT INTO districtdetails(districtname,stateid)VALUES(?,?)";
	$pre=$conn->prepare($insertqry);
	$data=array($_POST['districtname'],$_POST['statename']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="District Added successfully";
		session_write_close();
		header('Location:districtdetails.php');
	}
	else{
		$conn->rollback();
		$_SESSION['em']="District Name ".$_POST['districtname']." Already Exit !";
		session_write_close();
		header('Location:districtdetails.php');
	}
?>