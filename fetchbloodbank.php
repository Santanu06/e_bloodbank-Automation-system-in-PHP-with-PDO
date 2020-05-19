<?php 
	include "connectionstring.php";
?>
<option value="">Select Blood Bank</option>
<?php
	$bloodbank="Select bloodbankid,bloodbankname from bloodbankdetails where districtid='".$_POST['bloodbank']."'and activestatus='".Active."'";
	
	$bloodbankdata=$conn->query($bloodbank);
	foreach($bloodbankdata as $bloodbankvalue){
	?>
	<option value="<?php echo $bloodbankvalue['bloodbankid']; ?>"><?php echo $bloodbankvalue['bloodbankname']; ?></option>
    <?php } ?>