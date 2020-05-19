<?php 
	include 'connectionstring.php';
	$conn->beginTransaction();
	if($_FILES['image']['name']==''){
	$updateprofile="Update donoredetails set stateid=?,districtid=?,donorname=?,address=?,gender=?,age=?,contactno=?,emailid=?,bloodgroup=? where donorid=?";
	$pre=$conn->prepare($updateprofile);
	$data=array($_POST['statename'],$_POST['districtname'],$_POST['name'],$_POST['address'],$_POST['gender'],$_POST['age'],$_POST['contactno'],$_POST['emailid'],$_POST['bloodgroup'],$_SESSION['mbid']);
	$status=$pre->execute($data);
		if($status==true){
			$conn->commit();
			$_SESSION['sm']="Successfully Edited";
			session_write_close();
			header('Location:editdonordetails.php');
		}else{
			$conn->rollback();
			$_SESSION['em']="Failed to Edit";
			session_write_close();
			header("Location:editdonordetails.php");
		}
	}else{
		$updatewithimage="Update donoredetails set stateid=?,districtid=?,donorname=?,address=?,gender=?,age=?,contactno=?,emailid=?,bloodgroup=?,donorphoto=? where donorid=?"; 
		$prepare=$conn->prepare($updatewithimage);
		move_uploaded_file($_FILES['image']['tmp_name'],"./memberimage/".$_FILES['image']['name']);
		$donoredata=array($_POST['statename'],$_POST['districtname'],$_POST['name'],$_POST['address'],$_POST['gender'],$_POST['age'],$_POST['contactno'],$_POST['emailid'],$_POST['bloodgroup'],$_FILES['image']['name'],$_SESSION['mbid']);
		$donorstatus=$prepare->execute($donoredata);
		if($donorstatus==true){
			$conn->commit();
			$_SESSION['sm']="Successfully Edited";
			session_write_close();
			header('Location:editdonordetails.php');
		}else{
			$conn->rollback();
			$_SESSION['em']="Failed to Edit";
			session_write_close();
			header("Location:editdonordetails.php");
		}
	}
?>