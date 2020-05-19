<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
	}
	$qry="select bloodbankid from bloodbankdetails where emailid='".$_POST['emailid']."'and password='".$_POST['password']."'";
	$bbid=0;
	$qrydata=$conn->query($qry);
	foreach($qrydata as $qryvalue){
		$bbid=$qryvalue['bloodbankid'];
	}
	if($bbid > 0)
	{
		$_SESSION['bbid']=$bbid;
		session_write_close();
		header("Location:bloodbank/index.php");
	}
	else{
		$_SESSION['em']="Invalid Emailid or Password";
		session_write_close();
		header("Location:bloodbanklogin.php");
	}
	
?>