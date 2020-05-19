<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['mbid'])){
	}
	else
	{
	header('Location:../memberlogin.php');
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Blood Bank Search</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/userstylesheet.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--HEAD SECTION START-->
	<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>supportthebloodbank@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+1800-1008-1080
                </div>
            </div>
        </div>
    </header>
    <!--HEAD SECTION END-->
    
    <!--NAVBAR SECTION START-->
     <div class="navbarstyle">
    	<div class="container">
    		<div class="row">
        		<div class="col-md-12">
            		<h3 class="navbar-text">support the blood bank</h3>
            	</div>
       	 </div>
   	   </div>
    </div>
    <!--NAVBAR SECTION END-->
    
    <!--BANNER SECTION START-->
		<?php 
			include 'imageslider.html';
		?>
    <!--BANNER SECTION END--> 
    
    <!--MENU SECTION START-->
    <?php 
		include 'menusection.php';
	?>
    <!--MENU SECTION END-->
    
    <!-- CONTENT-WRAPPER SECTION START-->
    <div class="content-wrapper">
    	<div class="container">
        
         <div class="row content-margin">
          <div class="col-md-10 col-md-offset-1">
             <?php
			    if(isset($_SESSION['sm']))
				{
			 ?>
			   <div class="alert alert-success">
               <?php
				 echo $_SESSION['sm'];
				 unset($_SESSION['sm']);
			   ?>
              </div>
			  <?php } ?>
             </div>
      	  </div>
         <div class="row content-margin">
        	<div class="col-md-10 col-md-offset-1">
            	<?php
					if(isset($_SESSION['em']))
					{
					?>
					<div class="alert alert-danger">
                    <?php
						echo $_SESSION['em'];
						unset($_SESSION['em']);
					?>
                    </div>
			 <?php } ?>
            </div>
      	</div>
        
        	<div class="row " >
            <!-- CONTENT ONE START-->
            	<div class="col-md-10 col-md-offset-1" >
               <div class="panel panelprimary">
                  <div class="panelheading">
                  	Blood Bank Search
                  </div>
                  <div class="panelbody">
                  <form method='post' enctype="multipart/form-data">
                  
  				  <div class="form-group">
    				 <label>State :</label>
    					<select class="form-control" id="statename" name="statename">
                        	<option value="">Select State</option>
                            <?php 
								$stateinfo="select stateid,statename from statedetails where status='Active'";
								$statedata=$conn->query($stateinfo);
								foreach($statedata as $statevalue){
				  			?>
                            <option value="<?php echo $statevalue['stateid']; ?>"><?php echo $statevalue['statename']; ?></option>
                            <?php } ?>
                        </select>
  				  </div>
                  <div class="form-group">
                  	<label>District :</label>
                    	<select class="form-control" id="districtname" name="districtname">
                        	<option value="">Select District</option>
                        </select>
                  </div>
                  <div class="form-group">
                  	<label>Blood Bank :</label>
                    	<select class="form-control" id="bloodbank" name="bloodbank">
                        	<option>Select Blood Bank</option>
                        </select>
                  </div>
                  		<input type="submit" id="submit" name="submit"  value="Search" class="btn btn-primary" style=" border-radius: 5px;"/>
                        <input type="reset" value="Reset" class="btn btn-danger" style=" border-radius: 5px;" />
			   </form>
  				  </div>
                </div>
               </div>
                <?php 
		 			if(isset($_POST['submit'])){
				 ?>
               <div class="col-md-10 col-md-offset-1" >
               <div class="panel panelprimary">
                  <div class="panelheading">
                  	Blood Bank Details
                  </div>
                  <div class="panelbody">
               <?php 
			   	$bloodbankinfo="Select bloodbankname,address,contactno from bloodbankdetails where districtid='".$_POST['districtname']."'and bloodbankid='".$_POST['bloodbank']."'";
				
				$bbdata=$conn->query($bloodbankinfo);
				
				foreach($bbdata as $bbvalue){
			   ?>
               
              <label>Blood Bank :</label>
               		<span><?php echo $bbvalue['bloodbankname']; ?></span><br/>
              <label>Address :</label>
               		<span><?php echo $bbvalue['address']; ?></span><br/>
              <label>Contact No :</label>
               		<span><?php echo $bbvalue['contactno']; ?></span><br/>
               <?php } ?>
               </div>
              </div>
             </div>
         <!--BLOOD BANK DETAILS TABLE START-->
        
    	 
        <div class="col-md-10 col-md-offset-1" >
          <div class="panel panelprimary">
            <div class="panelheading">
               Blood Stock Details           
            </div>
            <div class="panelbody">
              <div class="table-responsive">
                 <table class="table table-hover">
                   <thead>
                      <tr>
                      	 <th>SlNo.</th>
                         <th>Blood Group</th>
                         <th>Quantity</th>
                       </tr>
                   </thead>
                 <tbody>
                 	<?php
                    	$bloodstock="Select * from bloodstockdeatails inner join bloodgroupdetails on bloodstockdeatails.bloodgroupid=bloodgroupdetails.bloodgroupid where bloodstockdeatails.bloodbankid=".$_POST['bloodbank'];
						
						$bbstockdata=$conn->query($bloodstock);
						
						foreach($bbstockdata as $bbstockvalue){
					?>
                     <tr>
                  	   <td><?php echo $bbstockvalue['bloodstockid']; ?></td>
                       <td><?php echo $bbstockvalue['bloodgroup']; ?></td>
                       <td><?php echo $bbstockvalue['stock']; ?></td>
                     </tr>
                     <?php } ?>
                 </tbody>
                </table>
        		</div>
            </div>
          </div>
       </div>
         </div>
       <!-- CONTENT ONE END--> 
            </div>
           <?php } ?>
              
    </div>
   		   
 </div>
</div>
    
    <!--DONOR DETAILS TABLE END-->
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION START-->
    	<?php 
			include 'footersection.php';
		?>
    <!-- FOOTER SECTION END-->
 	<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <script>
    	$(document).ready(function(){
			$('#statename').change(function(){
				$.ajax({
					url:"fetchdistrict.php",
					data:{stateid:$('#statename').val()},
					datatype:"html",
					type:'post',
					success:function(response)
							{
								$("#districtname").empty().append(response);
							},
					error:function()
						{
							var value="<option>Loading...</option>";
							$("#districtname").empty().append(value);
						}
				});
			});
		});
    </script>
    <script>
    	$(document).ready(function(){
			$('#districtname').change(function(){
				$.ajax({
					url:'fetchbloodbank.php',
					data:{bloodbank:$('#districtname').val()},
					datatype:'html',
					type:'post',
					success:function(response)
							{
								$("#bloodbank").empty().append(response);
							},
					error:function(){
							var em="<option>Loading...</option>";
							$("#bloodbank").empty().append(em);
							}
				});
			});
		});
    </script>
</body>
</html>
