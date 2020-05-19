<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['mbid'])){
	}
	else
	{
	header('Location:../memberlogin.php');
	}
	
?>
	<option value="">Select District</option>
    <?php 
	$districtqry="Select districtid,districtname from districtdetails where stateid='".$_POST['stateid']."' and districtstatus='Active'";
	
	$data=$conn->query($districtqry);
		foreach($data as $value){
	?>
    <option value="<?php echo $value['districtid']; ?>"><?php echo $value['districtname']; ?></option>
    <?php } ?>