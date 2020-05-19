<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
	}
	$conn->beginTransaction();
	$stockdeposite="Select stock from bloodstockdeatails where bloodgroupid='".$_POST['issueblood']."'and bloodbankid='".$_SESSION['bbid']."'";
	$data=$conn->query($stockdeposite);
	foreach($data as $value){
		$stock=$value['stock']-$_POST['quantity'];
	}
	if($_POST['quantity']>$value['stock']){
		$conn->rollback();
		$_SESSION['em']="Stock not Available";
		session_write_close();
		header("Location:issueblood.php");
	}else{
		$issueblood="Update bloodstockdeatails set stock=? where bloodgroupid=? and bloodbankid=?";
		$pre=$conn->prepare($issueblood);
		$data=array($stock,$_POST['issueblood'],$_SESSION['bbid']);
		$status=$pre->execute($data);
			if($status==true){
				$conn->commit();
				$_SESSION['sm']="Successfully Issued Blood";
				session_write_close();
				header("Location:issueblood.php");
			}else{
				$conn->rollback();
				$_SESSION['em']="Failed to Issue Blood";
				session_write_close();
				header("Location:issueblood.php");
			}
		}
?>