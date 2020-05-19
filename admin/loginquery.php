<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$loginqry="select adminid from admindetails where emailid='".$_POST['email']."'and password='".$_POST['password']."'";
	$adminid=0;
	$data=$conn->query($loginqry);
	foreach($data as $value)
	{
		$adminid=$value['adminid'];
	}
	if($adminid > 0)
	{
		$_SESSION['id']=$adminid;
		session_write_close();
		header('Location:index.php');
	}
	else{
		$_SESSION['em']="Invalid Emailid or Password";
		session_write_close();
		header('Location:../adminlogin.php');
	}
?>