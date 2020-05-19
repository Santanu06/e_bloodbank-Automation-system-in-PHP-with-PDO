<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
	}
	$passwordqry="select password from bloodbankdetails where bloodbankid=".$_SESSION['bbid'];
	$getpassword=$conn->query($passwordqry);
	foreach($getpassword as $password){
		$oldpassword=$password['password'];
	}
	if($oldpassword==$_POST['oldpassword']){
		$conn->beginTransaction();
		$updatepassword="Update bloodbankdetails set password=? where bloodbankid=?";
		$pre=$conn->prepare($updatepassword);
		$data=array($_POST['newpassword'],$_SESSION['bbid']);
		$status=$pre->execute($data);
		if($status==true){
			$conn->commit();
			$_SESSION['sm']="Password Successfully Changed";
			session_write_close();
			header("Location:changepassword.php");
		}
		else{
			$conn->rollback();
			$_SESSION['em']="Failed to change Password";
			session_write_close();
			header("Location:changepassword.php");
		}
	}else{
		$_SESSION['em']="Wrong Old Password";
		session_write_close();
		header("Location:changepassword.php");
	}
?>
