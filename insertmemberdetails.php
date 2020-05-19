<?php 
	include 'connectionstring.php';
	$conn->beginTransaction();
	
	$insertmemberinfo="insert into donoredetails(stateid,districtid,donorname,donorphoto,address,gender,age,contactno,emailid,password,bloodgroup)values(?,?,?,?,?,?,?,?,?,?,?)";
	$pre=$conn->prepare($insertmemberinfo);
	if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
		move_uploaded_file($_FILES['image']['tmp_name'],"memberimage/".$_FILES['image']['name']);
	}
	$data=array($_POST['statename'],$_POST['districtname'],$_POST['name'],$_FILES['image']['name'],$_POST['address'],$_POST['gender'],$_POST['age'],$_POST['contactno'],$_POST['email'],$_POST['password'],$_POST['bloodgroup']);
	
	$status=$pre->execute($data);
	if($status==true){
		$conn->commit();
		$_SESSION['sm']="Registration successfully Done";
		session_write_close();
		header("Location:memberregistration.php");
	}
	else{
		$conn->rollback();
		$_SESSION['em']="Failed to Registration";
		session_write_close();
		header("Location:memberregistration.php");
	}
?>