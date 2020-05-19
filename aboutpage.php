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
    <title>About</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/userstylesheet.css" rel="stylesheet" />
    <!--Slider link-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">


        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


        <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
        <link href="bootstrap-touch-slider.css" rel="stylesheet" media="all">


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
            	<div class="col-md-8 " >
               <p>Blood donation and transfusion service is an indispensable part of contemporary medicine and health care. Blood management has been recognized as a challenging task because of life threatening nature of blood products entails the punctilious administration due to its perishable nature & required timely processing and it also saves the life.<br/><br/> 
Such great challenge has been considerably alleviated with the development of information and computer technology. e-Blood Bank is an integrated blood bank automation system. This web based mechanism inter connects all the Blood Banks of the State into a single network. Integrated Blood Bank MIS refers the acquisition, validation, storage and circulation of various live data and information electronically regarding blood donation and transfusion service. Such system is able to assemble heterogeneous data into legible reports to support decision making from effective donor screening to optimal blood dissemination in the field. Those electronic processes will help the public for easy access to the blood availability status of blood banks on forger tips; so that he can place a requisition of a particular blood group in nearby blood bank (Especially rare groups) save a valuable life. <br/><br/> 
It also provides online status of blood group wise availability of blood units in all the licensed blood banks in the state. It includes online tracking and trailing system of the blood and blood products (components of blood) by the state level administrators. The system manages all the activities from blood collection both from camps & hospitals till the issue of blood units. It includes donor screening, blood collection, mandatory testing, storage and issue of the unit (whole human blood IP, different Blood component and aphaeresis blood products). <br/><br/> 
<h4><b>Features: </b></h4>
• Blood Collection Management<br/> • Blood Issue Management<br/> • Inventory Management<br/> • Stock Management<br/> • Camp Management<br/> • User and System Management<br/> 
<h4><b>Advantages: </b></h4>
• State & Blood Bank dashboard to provide the group wise blood stocks status for all stakeholders. <br/>• Dashboards for Blood Bank Officers (Tested/ Untested/ Buffer stock of blood units)<br/> • Distribution of blood from mother blood banks to blood storage centers.<br/> • Recruitment and retention of the regular blood donors in the state.<br/> • Maintain all the registers according to Drugs & Cosmetic Act of 1940.<br/> • Inventory of kits and consumables with alert for short expiry.<br/> • Alert mechanism for License, regular donors, organization to do VBD Camps.<br/> • Provides a paperless donor room<br/> • Real time information form collection to testing and use of blood and blood products. <br/>• Unique bar coding for each blood packets.<br/> • The citizen can access the availability of blood units from any blood bank of Odisha by using website, SMS or IVRS. </p>
               
         
         </div>
       <!-- CONTENT ONE END--> 
        
        <!-- CONTENT TWO START--> 
                <div class="col-md-4" >
                	<img src="assets/img/blood steps.png" />
                    <!--CONTENT INSIDE CONTENT TWO START--> 
            <div class="row">
            	<div class="col-md-6">
                  <div class="logocontainer">
               		 <h4 class="logostyle"><img class="logo" src="assets/img/logo1.png"/>New Donor?<br/>
           		    <a style="font-size:14px;color:#FFFFFF;" href="memberregistration.php">Click to Register Now</a></h4>
           	      </div>
              </div>
            </div>
       <!--CONTENT INSIDE CONTENT TWO END-->
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
