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
    <title>User Login</title>
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
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php">home</a></li>
                            <li><a href="aboutpage.php">about</a></li>
                            <li><a href="donorsearch.php">donor search</a></li>
                            <li><a href="bloodbanksearch.php">blood bank search</a></li>
                            <li><a href="memberregistration.php">registration</a></li>
                            <li><a href="whydonet.php">why donate</a></li>
                            <li><a href="whocanwhocan't.php">who can/who can't</a></li>
                            <li><a href="contactus.php">contact us</a></li>
                            <li><a href="memberlogin.php">user login</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
                  	<form action='memberlogincode.php' method='post' enctype="multipart/form-data">
                 		 <div class="form-group">
                  			<label>Email Id :</label>
                    			<input type="text" id="emailid" name="emailid" class="form-control" placeholder="Enter Email Id" />
                  		</div>
                  		<div class="form-group">
                  			<label>Password :</label>
                    			<input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" />
                 		</div>
				<button type="submit" class="btn btn-info" style=" border-radius: 5px;"><span class="glyphicon glyphicon-user"></span> &nbsp;Log In</button>
                <input type="reset" class="btn btn-danger" style="border-radius:5px;">
			   </form>
  				  </div>
                </div>
               </div>
             <!-- CONTENT TWO START-->
               <div class="col-md-5 ">
                  <div class="logocontainer">
               		 <h4 class="logostyle"><img class="logo" src="assets/img/logo1.png"/>New Donor?<br/>
           		    <a style="font-size:14px;color:#FFFFFF;" href="memberregistration.php">Click to Register Now</a></h4>
           	      </div>
              </div>
         <!-- CONTENT TWO END-->  
       <!-- CONTENT ONE END--> 
            </div>
            
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    
    <!-- FOOTER SECTION START-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2019 e-bloodbank Automation System 
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
 	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.min.js"></script>


</body>
</html>
