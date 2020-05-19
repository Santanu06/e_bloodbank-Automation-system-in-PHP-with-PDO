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
    <title>Dashboard</title>
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
    <div class="content-wrapper2">
      <div class="container">
           <div class="row">
            <div class="col-md-12">
              <h4 class="page-head-line">Dashboard</h4>
            </div>
         </div>
         
                     <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <a href="changedonorpassword.php"><i  class="fa fa-eraser dashboard-div-icon" ></i></a>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
  </div>
                           
</div>
                         <h5>Change Password</h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                       <a href="editdonordetails.php"><i  class="fa fa-pencil-square-o dashboard-div-icon" ></i></a>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Edit Profile</h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <a href="bloodbanksearch.php"><i  class="fa fa-suitcase dashboard-div-icon" ></i></a>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div>
                         <h5>Blood Bank Details</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <a href="memberlogout.php"><i class="glyphicon glyphicon-log-out dashboard-div-icon" ></i></a>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
                           
</div>
                         <h5>Logout</h5>
                    </div>
                </div>

            </div>
         
 </div>
</div>
    <!-- CONTENT-WRAPPER SECTION END-->
   <!-- FOOTER SECTION START-->
    	<?php 
			include 'footersection.php';
		?>
 	<!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.min.js"></script>


</body>
</html>
