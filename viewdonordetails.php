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
    <title>View Donor Details</title>
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
        	<div class="row content-margin">
            <!-- CONTENT ONE START-->
            	<div class="col-md-10 col-md-offset-1" >
               <div class="panel panelprimary">
                  <div class="panelheading">
                  	Donor Details
                  </div>
                  <div class="panelbody">
               <?php 
			   		$donordetails="Select donorphoto,statename,districtname,donorname,address,gender,age,contactno,emailid,bloodgroup from donoredetails inner join statedetails on donoredetails.stateid =  statedetails.stateid inner join districtdetails on donoredetails.districtid=districtdetails.districtid where donorid=".$_GET['id'];
					$donordata=$conn->query($donordetails);
					
					foreach($donordata as $donorvalue){
					
			   ?>
               
               <div class="form-group text-center">
               		<img src="./memberimage/<?php echo $donorvalue['donorphoto']; ?>" class="img img-thumbnail " style="width:120px;height:120px;">
               </div>
               <div class="form-group">
               		<label>State : </label>
                    	<span class="form-control"><?php echo $donorvalue['statename']; ?></span>
               </div>
               <div class="form-group">
               		<label>District : </label>
                    	<span class="form-control"><?php echo $donorvalue['districtname']; ?></span>
               </div>
          		<div class="form-group">
               		<label>Name : </label>
                    	<span class="form-control"><?php echo $donorvalue['donorname']; ?></span>
               </div>
               <div class="form-group">
               		<label>Address : </label>
                    	<span class="form-control"><?php echo $donorvalue['address']; ?></span>
               </div>
               <div class="form-group">
               		<label>Gender : </label>
                    	<span class="form-control"><?php echo $donorvalue['gender']; ?></span>
               </div>
               <div class="form-group">
               		<label>Age : </label>
                    	<span class="form-control"><?php echo $donorvalue['age']; ?></span>
               </div>
               <div class="form-group">
               		<label>Contact No. : </label>
                    	<span class="form-control"><?php echo $donorvalue['contactno']; ?></span>
               </div>
               <div class="form-group">
               		<label>Email Id : </label>
                    	<span class="form-control"><?php echo $donorvalue['emailid']; ?></span>
               </div>
               <div class="form-group">
               		<label>Blood Group : </label>
                    	<span class="form-control"><?php echo $donorvalue['bloodgroup']; ?></span>
               </div>
      			<?php } ?>
                <div class="form-group text-center">
   		   			<a class="btn btn-default" href="donorsearch.php">Back</a>
                 </div>
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
 	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
