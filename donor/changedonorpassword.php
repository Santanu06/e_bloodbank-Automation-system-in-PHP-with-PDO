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
    <title>Change Password</title>
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
          <div class="col-md-5 col-md-offset-1">
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
        	<div class="col-md-5 col-md-offset-1">
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
            <div class="col-md-5 col-md-offset-1" >
               <div class="panel panelprimary">
                  	<div class="panelheading">
                  		Member Login
                  	</div>
                  <div class="panelbody">
                  	<form action='changepassword.php' method='post'>
                 		 <div class="form-group">
                  			<label>Old Password :</label>
                    			<input type="password" id="oldpswd" name="oldpswd" class="form-control" placeholder="Enter Old Password" />
                  		</div>
                  		<div class="form-group">
                  			<label>New Password :</label>
                    			<input type="password" id="newpassword" name="newpassword" placeholder="Enter New Password" class="form-control" />
                 		</div>
                        <div class="form-group">
                  			<label>Confirm Password :</label>
                    			<input type="password" id="conpassword" name="conpassword" placeholder="Enter Confirm Password" class="form-control" />
                 		</div>
				<button type="submit" class="btn btn-info" style=" border-radius: 5px;"><span class="glyphicon glyphicon-user"></span> &nbsp;Log In</button>
                <input type="reset" class="btn btn-danger" style="border-radius:5px;">
			   </form>
  				  </div>
                </div>
               </div>
            
       <!-- CONTENT ONE END--> 
            </div>
            
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


</body>
</html>
