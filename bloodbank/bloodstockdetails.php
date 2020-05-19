<?php 
	include 'connectionstring.php';
	if(isset($_SESSION['bbid'])){
	}else{
	header('Location:../bloodbanklogin.php');
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
    <title>Blood Stock details</title>
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
    <!-- MENU SECTION START-->
    	<?php 
			include 'menusection.php';
		?>
    <!-- MENU SECTION END-->
    
    <div class="content-wrapper">
      <div class="container">
           <div class="row">
            <div class="col-md-10 col-md-offset-1">
            
              <h4 class="page-head-line">Blood Stock Details</h4>
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
               View Blood Bank           
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                 <table class="table table-hover">
                   <thead>
                      <tr>
                      	 <th>SlNo.</th>
                         <th>Blood Group Name</th>
                         <th>No.Of Stock</th>
                      </tr>
                   </thead>
                 <tbody>
                 	<?php 
						$bloodgroup="select bloodgroupid,bloodgroup from bloodgroupdetails";
						$bloodgroupdata=$conn->query($bloodgroup);
						foreach($bloodgroupdata as $bloodgroupvalue){
							$bloodgroup=$bloodgroupvalue['bloodgroupid'];
					?>
                     <tr>
                       <td><?php echo $bloodgroupvalue['bloodgroupid']; ?></td>
                       <td><?php echo $bloodgroupvalue['bloodgroup']; ?></td>
                       <td><?php $bloodstock="Select stock from bloodstockdeatails where bloodgroupid=".$bloodgroup;
							
							$sum=0;
							$bloodstockdata=$conn->query($bloodstock);
							foreach($bloodstockdata as $bloodstockvalue){
							
							$sum=$sum+$bloodstockvalue['stock'];}?><?php echo $sum; ?>  </td>
                     </tr>
                   
                   <?php } ?>
                 </tbody>
                </table>
              </div>
            </div>
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
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.min.js"></script>
    
</body>
</html>
