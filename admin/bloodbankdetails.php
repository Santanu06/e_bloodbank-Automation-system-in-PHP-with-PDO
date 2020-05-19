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
    <title>Blood Bank Details</title>
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
            <div class="col-md-12 ">
            
              <h4 class="page-head-line">Blood Bank Details</h4>
            </div>
         </div>
         
         <div class="row">
          <div class="col-md-12">
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
        	<div class="col-md-12">
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
        <div class="col-md-12 ">
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
                         <th>Blood Bank Name</th>
                         <th>State</th>
                         <th>District</th>
                         <th>Address</th>
                         <th>Contact No.</th>
                         <th>Email</th>
                         <th>Reg.Date</th>
                         <th>Status</th>
                         <th>Edit</th>
                         <th>Delete</th>
                       </tr>
                   </thead>
                 <tbody>
                 	<?php 
						$view="Select bloodbankid,bloodbankname,address,contactno,emailid,registrationdate,activestatus,statename,districtname From bloodbankdetails inner join statedetails on bloodbankdetails.stateid=statedetails.stateid inner join districtdetails on bloodbankdetails.districtid=districtdetails.districtid";
						$data=$conn->query($view);
						foreach($data as $value){
					?>
                     <tr>
                  	   <td><?php echo $value['bloodbankid']; ?></td>
                       <td><?php echo $value['bloodbankname']; ?></td>
                       <td><?php echo $value['statename']; ?></td>
                       <td><?php echo $value['districtname']; ?></td>
                       <td><?php echo $value['address']; ?></td>
                       <td><?php echo $value['contactno']; ?></td>
                       <td><?php echo $value['emailid']; ?></td>
                       <td><?php echo $value['registrationdate']; ?></td>
                       <?php 
					   	if($value['activestatus']=='Active'){ ?>
                       <td><a href="changestatus.php ? id=<?php echo $value['bloodbankid']; ?>" class="btn btn-success btn-sm"><?php echo $value['activestatus']; ?></a></td> 
					   <?php }else{ ?>
					   <td><a href="changestatus.php ? id=<?php echo $value['bloodbankid']; ?>" class="btn btn-danger btn-sm"><?php echo $value['activestatus']; ?></a></td> <?php } ?>
					   
                       <td><a href="editbloodbank.php ? id=<?php echo $value['bloodbankid']; ?>" class="btn btn-info"><i class="fa fa-edit">Edit</i></a></td>
                       <td><a href="deletebloodbank.php ? name=<?php echo $value['bloodbankid']; ?>" class="btn btn-danger"><i class="fa fa-pencil">Delete</i></a></td>
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
