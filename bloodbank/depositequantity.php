<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
	}
	$conn->beginTransaction();
	$stockdeposite="Select stock from bloodstockdeatails where bloodgroupid='".$_POST['depositeblood']."'and bloodbankid='".$_SESSION['bbid']."'";
	$data=$conn->query($stockdeposite);
	foreach($data as $value){
		$stock=$_POST['quantity']+$value['stock'];
	}
		if($stock>0){
			$updatebloodstock="Update bloodstockdeatails set stock=? where bloodgroupid=? and bloodbankid=?";
			$res=$conn->prepare($updatebloodstock);
			$updatedata=array($stock,$_POST['depositeblood'],$_SESSION['bbid']);
			$updatestatus=$res->execute($updatedata);
			if($updatestatus==true){
				$conn->commit();
				$_SESSION['sm']="Blood Successfully Deposited";
				session_write_close();
				header('Location:depositeblood.php');
			}else{
				$conn->rollback();
				$_SESSION['em']="Failed to Deposite Blood";
				session_write_close();
				header('Location:depositeblood.php');
			}
		}else{
			$insertbloodstock="insert into bloodstockdeatails(bloodbankid,bloodgroupid,stock)values(?,?,?)";
			$pre=$conn->prepare($insertbloodstock);
			$stockdata=array($_SESSION['bbid'],$_POST['depositeblood'],$_POST['quantity']);
			$status=$pre->execute($stockdata);
			if($status==true){
				$conn->commit();
				$_SESSION['sm']="Blood Successfully Deposited";
				session_write_close();
				header('Location:depositeblood.php');
			}else{
				$conn->rollback();
				$_SESSION['em']="Failed to Deposite Blood";
				session_write_close();
				header('Location:depositeblood.php');
			}
		}
?>
