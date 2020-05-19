<?php 
	include'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	$bbankinsert="INSERT INTO bloodbankdetails(bloodbankname,stateid,districtid,address,contactno,emailid,password)VALUES(?,?,?,?,?,?,?)";
	$pre=$conn->prepare($bbankinsert);
	$data=array($_POST['bbankname'],$_POST['statename'],$_POST['districtname'],$_POST['address'],$_POST['cno'],$_POST['email'],$_POST['password']);
	$status=$pre->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']="Registration Successfull";
		session_write_close();
		header('Location:addbloodbank.php');
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Register";
		session_write_close();
		header('Location:addbloodbank.php');
	}
?>