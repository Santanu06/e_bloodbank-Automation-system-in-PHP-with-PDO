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
    <title>View Donor Details</title>
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
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="statedetails.php">state</a></li>
                            <li><a href="districtdetails.php">District</a></li>
                            <li><a href="addbloodbank.php">add blood bank </a></li>
                            <li><a href="bloodbankdetails.php">view blood bank</a></li>
                            <li><a href="viewedonor.php">view donor</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h4 class="page-head-line">State Details</h4>
            </div>
          </div>
         
         <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     Donor Details
                   </div>
               <div class="panel-body">
               
               <?php 
			   		$donordetails="Select donorphoto,statename,districtname,donorname,address,gender,age,contactno,emailid,bloodgroup from donoredetails inner join statedetails on donoredetails.stateid = statedetails.stateid inner join districtdetails on donoredetails.districtid = districtdetails.districtid where donorid=".$_GET['id'];
					
					$donordata=$conn->query($donordetails);
					
					foreach($donordata as $donorvalue){
					
			   ?>
               
               <div class="form-group text-center">
               		<img src="../memberimage/<?php echo $donorvalue['donorphoto']; ?>" class="img img-thumbnail " style="width:120px;height:120px;">
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
   		   			<a class="btn btn-default" href="viewedonor.php">Back</a>
                 </div>
 			  </div>
			 </div>
            </div>
           </div>
          </div>
         </div>
    <!-- CONTENT-WRAPPER SECTION END-->
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
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.min.js"></script>
   
</body>
</html>
