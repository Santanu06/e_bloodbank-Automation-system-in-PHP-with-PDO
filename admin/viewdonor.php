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
    <title>View Donor</title>
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
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">
           <div class="row">
            <div class="col-md-10 col-md-offset-1">
            
              <h4 class="page-head-line">Donor Details</h4>
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
         <!--DONOR TABLE START -->
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">
               View Donor            
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                 <table class="table table-hover">
                   <thead>
                      <tr>
                         <th>Sl No.</th>
                         <th>Member Name</th>
                         <th>Gender</th>
                         <th>Contact No.</th>
                         <th>Blood Group</th>
                         <th>Regd. Date</th>
                         <th>Status</th>
                         <th>View</th>
                       </tr>
                   </thead>
                 <tbody>
                 	<?php 
						$donorinfo="select donorid,donorname,gender,contactno,bloodgroup,registration_date,activestatus from donoredetails ";
						$donordata=$conn->query($donorinfo);
						foreach($donordata as $donorvalue){
					?>
                     <tr>
                     	<td><?php echo $donorvalue['donorid']; ?></td>
                        <td><?php echo $donorvalue['donorname']; ?></td>
                        <td><?php echo $donorvalue['gender']; ?></td>
                        <td><?php echo $donorvalue['contactno']; ?></td>
                        <td><?php echo $donorvalue['bloodgroup']; ?></td>
                        <td><?php echo $donorvalue['registration_date']; ?></td>
                        <?php
						if($donorvalue['activestatus']=='Active'){ ?>
                        <td><a href="donorstatus.php ? id=<?php echo $donorvalue['donorid']; ?>" class="btn btn-success btn-sm" ><?php echo $donorvalue['activestatus']; ?></td> 
						<?php }else{ ?>
                        <td><a href="donorstatus.php ? id=<?php echo $donorvalue['donorid']; ?>"  class="btn btn-danger btn-sm"><?php echo $donorvalue['activestatus']; ?></td> <?php } ?>
                        <td><a href="viewdonordetails.php ? id=<?php echo $donorvalue['donorid']; ?>" class="btn btn-info">View</a></td>
                     </tr> 
                     <?php } ?>  
                 </tbody>
                </table>
              </div>
            </div>
          </div>
       </div>
    </div>
   	<!--DONOR TABLE END -->	   
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
