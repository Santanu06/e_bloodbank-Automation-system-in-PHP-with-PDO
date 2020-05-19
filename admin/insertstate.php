<?php
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
	}
	$conn->beginTransaction();
	
	$countstate="select count(statename) from statedetails";
	$countstatedata=$conn->query($countstate);
	foreach($countstatedata as $countstatevalue){
		$countst=$countstatevalue['count(statename)'];
		
	}
		
	$insertqry="INSERT INTO statedetails(statename)VALUES(?)";
	$prepare=$conn->prepare($insertqry);
	$data=array($_POST['statename']);
	$status=$prepare->execute($data);
	if($status==true)
	{
		$conn->commit();
		$_SESSION['sm']='Successfully submited';
		session_write_close();
		header("Location:statedetails.php");
	}
	else{
		$conn->rollback();
		
		$_SESSION['em']="State Name ".$_POST['statename']." Already Exist !";             ;
		session_write_close();
		header("Location:statedetails.php");
	}
?>