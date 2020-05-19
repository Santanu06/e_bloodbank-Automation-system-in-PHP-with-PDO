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
    <title>Edit Donor Details</title>
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
			include  'imageslider.html';
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
            <div class="row">
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
         <div class="row">
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
            <!-- CONTENT ONE START-->
            	<div class="col-md-10 col-md-offset-1" >
               <div class="panel panelprimary">
                  <div class="panelheading">
                  	Edit Profile
                  </div>
                  <div class="panelbody">
               
               <form action="updateeditprofile.php" method="post" enctype="multipart/form-data">
               <?php 
			   		$donordetails="Select donoredetails.*,statedetails.statename,districtdetails.districtname from donoredetails inner join statedetails on donoredetails.stateid=statedetails.stateid inner join districtdetails on donoredetails.districtid=districtdetails.districtid  where donorid=".$_SESSION['mbid'];
					
					$donordata=$conn->query($donordetails);
					foreach($donordata as $donorvalue){
					
				?>
               <div class="form-group text-center">
               		<img src="../memberimage/<?php echo $donorvalue['donorphoto']; ?>" class="img img-thumbnail " style="width:120px;height:120px;">
               </div>
               <div class="form-group">
               		<label>State : </label>
                     
                    	<select class="form-control" id="statename" name="statename">
                        <?php 
						$stateinfo="select stateid,statename from statedetails";
						$statedata=$conn->query($stateinfo);
						foreach($statedata as $statevalue){
				  	?>
                        	<option <?php echo($donorvalue['stateid']==$statevalue['stateid'] ? 'selected' : '') ?> value="<?php echo $statevalue['stateid']; ?>"><?php echo $statevalue['statename']; ?></option>
                            <?php } ?>
                        </select>
                        
               </div>
               <div class="form-group">
               		<label>District : </label>
                    	<select class="form-control" id="districtname" name="districtname">
                       
    						
   						 <option value="<?php echo $donorvalue['districtid']; ?>"><?php echo $donorvalue['districtname']; ?></option>
    					   	
                        </select>
                    	
               </div>
          		<div class="form-group">
               		<label>Name : </label>
                    	<input type="text" id="name" name="name" class="form-control"value="<?php echo $donorvalue['donorname']; ?>" />
               </div>
               <div class="form-group">
               		<label>Address : </label>
                    	<input type="address" name="address" class="form-control" value="<?php echo $donorvalue['address']; ?>" />
               </div>
               <div class="form-group">
               		<label>Gender : </label>
                    <?php
                    	if($donorvalue['gender']=="Male"){
					?>
                    <input type="radio" id="genmale" name="gender" value="Male" checked="checked" />Male
                    <input type="radio" id="genfemale" name="gender" value="Female" />Female
                    <?php }else{ ?>
                    <input type="radio" id="genmale" name="gender" value="Male" />Male
                    <input type="radio" id="genfemale" name="gender" value="Female" checked="checked" />Female
                    <?php } ?>
               </div>
               <div class="form-group">
               		<label>Age : </label>
                    	<input type="text" name="age" class="form-control" value="<?php echo $donorvalue['age']; ?>" />
               </div>
               <div class="form-group">
               		<label>Contact No. : </label>
                    	<input type="text" name="contactno" class="form-control" value="<?php echo $donorvalue['contactno']; ?>"/>
               </div>
               <div class="form-group">
               		<label>Email Id : </label>
                    	<input type="text" name="emailid" class="form-control" value="<?php echo $donorvalue['emailid']; ?>"/>
               </div>
               <div class="form-group">
               		<label>Blood Group : </label>
                    	<select class="form-control" name="bloodgroup" id="bloodgroup" name="bloodgroup">
                        <?php 
                        	$bloodgroup="Select * from bloodgroupdetails";
							$bloodgroupdata=$conn->query($bloodgroup);
							foreach($bloodgroupdata as $bloodgroupvalue){
						?>
                        	<option <?php echo($bloodgroupvalue['bloodgroup']==$donorvalue['bloodgroup'] ? 'selected':'')?>><?php echo $bloodgroupvalue['bloodgroup']; ?></option>
                            <?php } ?>
                        </select>
               </div>
               <div class="form-group">
               		<label>Upload Image : </label>
                    	<input type="file" class="form-control" id="image" name="image"/>
               </div>
      			<?php } ?>
                <input type="submit" value="Submit" class="btn btn-primary" style=" border-radius: 5px;"/>
                <input type="reset" value="Reset" class="btn btn-danger" style=" border-radius: 5px;" />
                 </form>
 			  </div>
			 </div>
            </div>
           </div>
          </div>
         </div>
       <!-- CONTENT ONE END--> 
        
         
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION START-->
    
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
			$("#statename").change(function(){
			<!--alert($('#statename').val());-->
				$.ajax({
					url:'fetchdistrict.php',
					data:{stateid:$('#statename').val()},
					datatype:'html',
					type:'post',
					success:function(districtname){
					<!--alert(districtname);-->
								$("#districtname").empty().append(districtname);
							}
					//error:function(){
//								var distname=<option>Loading...</option>;
//								$("#districtname").empty().append(distname);
//							}
				})
			});
		});
    </script>
</body>
</html>
