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
    <title>Contact us</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/userstylesheet.css" rel="stylesheet" />
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
        	<div class="row content-margin" >
            <!-- CONTENT ONE START-->
            	<div class="col-md-9" >
               		<h4>e-Blood Bank<br/>
                    Plot No.359,2<sup>nd</sup> floor,Sahid Nagar,<br/>
                    Bhubaneswar,Odisha.
                    </h4>
               
        <!--CONTENT INSIDE CONTENT ONE--> 
            <div class="row">
            	<div class="col-md-6">
                  <div class="logocontainer">
               		 <h4 class="logostyle"><img class="logo" src="assets/img/logo1.png"/>New Donor?<br/>
           		    <a style="font-size:14px;color:#FFFFFF;" href="memberregistration.php">Click to Register Now</a></h4>
           	      </div>
              </div>
            </div>
       <!--CONTENT INSIDE CONTENT ONE END--> 
         </div>
       <!-- CONTENT ONE END--> 
        
        <!-- CONTENT TWO START--> 
                <div class="col-md-3" >
                	<img src="assets/img/blood steps.png"/>
                </div>
       <!-- CONTENT TWO START--> 
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION START-->
    
    <!-- FOOTER SECTION START-->
    	<?php 
			include 'footersection.php';
		?>
    <!-- FOOTER SECTION END-->
 	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
