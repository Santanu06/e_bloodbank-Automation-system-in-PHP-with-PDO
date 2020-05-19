<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$changeqry="select password from admindetails where adminid=".$_SESSION['id'];
	$data=$conn->query($changeqry);
	
	foreach($data as $value)
	{
		$oldpassword=$value['password'];
	}
	if($_POST['oldpassword']==$oldpassword)
	{
		$conn->beginTransaction();
		$updateqry="Update admindetails Set password=? where adminid=?";
		$pre=$conn->prepare($updateqry);
		$data=array($_POST['newpassword'],$_SESSION['id']);
		$status=$pre->execute($data);
		if($status==true)
		{
			$conn->commit();
			$_SESSION['sm']="Password successfully changed";
			session_write_close();
			header('Location:adminlogin.php');
		}
		else{
			$conn->rolback();
			$_SESSION['em']="Failed to change Password";
			session_write_close();
			header("Location:changepassword.php");
		}
	}
	else{
		$_SESSION['em']="Wrong Old Password";
		session_write_close();
		header("Location:changepassword.php");
	}
?>