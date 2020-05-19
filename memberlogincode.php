<?php
	include 'connectionstring.php';
	$memberid="select donorid from donoredetails where emailid='".$_POST['emailid']."'and password='".$_POST['password']."'";
	$mbid=0;
	$memberdata=$conn->query($memberid);
	foreach($memberdata as $membervalue)
	{
		$mbid=$membervalue['donorid'];
	}
	if($mbid>0)
	{
		$_SESSION['mbid']=$mbid;
		session_write_close();
		header('Location:./donor/index.php');
	}else{
		$_SESSION['em']="Invalid Email Id or Password";
		session_write_close();
		header('Location:memberlogin.php');
	}
?>