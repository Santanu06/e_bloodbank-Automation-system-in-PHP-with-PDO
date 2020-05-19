<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['id'])){
	}else{
	header("Location:../adminlogin.php");
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
    <title>Edit Blood Bank</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>ebloodbank@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                
                <h3 style="font-family: 'Roboto', sans-serif;color:#FFFFFF; width: 200px;" >Blood Bank</h3>
                
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
     <!--MENU SECTION START-->
     	<?php 
			include "menusection.php";
		?>
     <!--MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">
           <div class="row">
            <div class="col-md-10 col-md-offset-1">
            
              <h4 class="page-head-line">Blood Bank Details</h4>
            </div>
         </div>
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
         
         <div class="row">
           <div class="col-md-10 col-md-offset-1">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     Edit Blood bank Name
                   </div>
               <div class="panel-body">
               <form action='updatebloodbank.php' method='post'>
               <input type="hidden" id="stateid" name="stateid" />
               <?php 
			   		$bloodbankinfo="select * from bloodbankdetails where bloodbankid=".$_GET['id'];
					 
					 	
					$data=$conn->query($bloodbankinfo);
					foreach($data as $value){
					
			   ?>
  				  <div class="form-group">
    				 <label>Select State : </label>
    					<select id="statename" name="statename" class="form-control">
                        	<option value="">Select</option>
                            <?php 
								$state="select stateid,statename from statedetails";
								$statedata=$conn->query($state);
								foreach($statedata as $statevalue){
							?>
                            <option <?php echo($value['stateid']==$statevalue['stateid'] ? 'selected':'') ?> value="<?php echo $statevalue['stateid'] ?>"><?php echo $statevalue['statename'] ?></option>
                            <?php } ?>
                        </select>
  				  </div>
                  
                  <input type="hidden" id="districtid" name="districtid" />
                   <div class="form-group">
    				 <label>Select District : </label>
    					<select id="districtname" name="districtname" class="form-control">  	
                        <option value="">Select District</option>
                        <?php 
							$distqry="select districtid,districtname from districtdetails";
							$distdata=$conn->query($distqry);
							foreach($distdata as $distvalue){
							
						?>
                        <option <?php echo($distvalue['districtid']==$value['districtid'] ? 'selected':"") ?> value="<?php echo $distvalue['districtid']; ?>"><?php echo $distvalue['districtname']; ?></option>
                        <?php } ?>
                        </select>
                       
  				  </div>
                   <input type="hidden" id="bloodbankid" name="bloodbankid" value="<?php echo $value['bloodbankid']; ?>" />
                  <div class="form-group">
                  	<label>Blood Bank Name : </label>
                    <input type="text" id="bbankname" name="bbankname" class="form-control" value="<?php echo $value['bloodbankname']; ?>"/>
               </div>
                <div class="form-group">
                  <label>Address : </label>
                   <textarea id="address" name="address" class="form-control"><?php echo $value['address']; ?></textarea>
                </div>
                 <div class="form-group">
                  <label>Contact No. : </label>
                   <input type="text" id="cno" name="cno" class="form-control" value="<?php echo $value['contactno']; ?>" />
                </div>
                <div class="form-group">
                  <label>Email Id : </label>
                   <input type="text" id="email" name="email" class="form-control" value="<?php echo $value['emailid']; ?>" />
                    <?php } ?>
                </div>
                  		<input type="submit" value="Submit" class="btn btn-primary" style=" border-radius: 5px;"/>
                        <input type="reset" value="Reset" class="btn btn-danger" style=" border-radius: 5px;" />
                       
			   </form>
       		  </div>
   			 </div>
            </div>
          </div>
 </div>
</div>
    <!-- CONTENT-WRAPPER SECTION END-->
     <!-- FOOTER SECTION START-->
    	<?php 
			include 'footer.php';
		?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
