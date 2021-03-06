<?php 
	include 'connectionstring.php';
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
    <title>Donor Search</title>
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
                  	Donor Search
                  </div>
                  <div class="panelbody">
                  <form action='donorsearch.php' method='post' enctype="multipart/form-data">
                  
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
                  	<label>Blood Group :</label>
                    	<select class="form-control" id="bloodgroup" name="bloodgroup">
                        	<option value="">Select Blood Group</option>
                            <?php 
								$bloodgroup="select bloodgroup from bloodgroupdetails";
								$bloodgroupdata=$conn->query($bloodgroup);
								foreach($bloodgroupdata as $bloodgroupvalue){
								
							?>
                            <option><?php echo $bloodgroupvalue['bloodgroup']; ?></option>
                            <?php } ?>
                        </select>
                  </div>
                  		<input type="submit" name="submit" id="sub" value="Search" class="btn btn-primary" style=" border-radius: 5px;"/>
                        <input type="reset" value="Reset" class="btn btn-danger" style=" border-radius: 5px;" />
			   </form>
  				  </div>
                </div>
               </div>
        <?php if(isset($msg)){ echo $msg;} ?>
         <!--DONOR DETAILS TABLE START-->
         <?php
    	    if(isset($_POST['submit'])){
          if(($_REQUEST['statename'] == "") || ($_REQUEST['districtname'] == "") || ($_REQUEST['bloodgroup'] == "")){
            $msg='<div class="alert alert-warning">Please Fill All Fields</div>';
          }else{ ?>

            <div class="col-md-10 col-md-offset-1" >
            <div class="panel panelprimary">
              <div class="panelheading">
                 Donor Details           
              </div>
              <div class="panelbody">
                <div class="table-responsive">
                   <table class="table table-hover">
                     <thead>
                        <tr>
                           <th>SlNo.</th>
                           <th>Name</th>
                           <th>Address</th>
                           <th>Age</th>
                           <th>Mobile No.</th>
                           <th>Details</th>
                         </tr>
                     </thead>
                   <tbody>
              <?php 
                  $donor="Select * from donoredetails where districtid=".$_POST['districtname']." and bloodgroup='".$_POST['bloodgroup']."'and activestatus='Active'";
                  
                  $donordata=$conn->query($donor);
                  if($donordata){
                    foreach($donordata as $donorvalue){
              ?>
                       <tr>
                         <td><?php echo $_POST['bloodgroup']; ?></td>
                         <td><?php echo $donorvalue['donorname']; ?></td>
                         <td><?php echo $donorvalue['address']; ?></td>
                         <td><?php echo $donorvalue['age']; ?></td>
                         <td><?php echo $donorvalue['contactno']; ?></td>
                         <td><a href="viewdonordetails.php ? id=<?php echo $donorvalue['donorid']; ?>">View</a></td>
                       </tr>
                       <?php } ?>
                       <?php }else{
                         echo '<div class="alert alert-info col-md-8">Doner not Available</div>';
                       } ?>
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>
         <?php } ?>
         <?php } ?>
       <!-- CONTENT ONE END--> 
            </div>
           
              
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
    <script src="memberregistrationvalidation.js"></script>

</body>
</html>
