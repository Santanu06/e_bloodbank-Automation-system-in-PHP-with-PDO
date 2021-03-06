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
    <title>District Details</title>
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
    <div class="content-wrapper" >
      <div class="container " >
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h4 class="page-head-line">District Details</h4>
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
                      Creat District
                   </div>
               <div class="panel-body">
               <form action="insertdistrict.php" method='post'>
  				  <div class="form-group">
    				 <label>State Name</label>
                     	<select id="statename" name="statename" class="form-control">
                        	<option value="">Select State</option>
                            <?php 
								$stateqry="select stateid,statename from statedetails";
								$statedata=$conn->query($stateqry);
								foreach($statedata as $statevalue){
							?>
                            <option value="<?php echo $statevalue['stateid']; ?>"><?php echo $statevalue['statename']; ?></option>
                            <?php } ?>
                        </select>
                        <span id="stateval"></span>
                 </div>
                 <div class="form-group">
                    <label>District Name</label>
    					<input type="text" class="form-control" id="districtname" name="districtname" placeholder="Enter District Name" onKeyPress="return districtNameValidation(event)" />
                        <span id="districtval"></span>
  				  </div>
                  		<input type="submit" value="Submit" class="btn btn-primary" style=" border-radius: 5px;" onClick="return districtValidation()"/>
                        <input type="reset" value="Reset" class="btn btn-danger" style=" border-radius: 5px;" />
			   </form>
       		  </div>
   			 </div>
            </div>
          </div>
          
      <div class="row">
       <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">
               View State            
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                 <table class="table table-hover">
                   <thead>
                      <tr>
                         <th>Sl No.</th>
                         <th>State Name</th>
                         <th>District Name</th>
                         <th>District Status</th>
                         <th>Edit</th>
                         <th>Delete</th>
                       </tr>
                   </thead>
                 <tbody>
                 	<?php
						$districtqry="select statename,districtid,districtname,districtstatus FROM districtdetails INNER JOIN statedetails  ON districtdetails.stateid=statedetails.stateid";
						$districtdata=$conn->query($districtqry);
						foreach($districtdata as $districtvalue){		
					?>
                     <tr>
                       <td><?php echo $districtvalue['districtid']; ?></td>
                       <td><?php echo $districtvalue['statename']; ?></td>
                       <td><?php echo $districtvalue['districtname']; ?></td>
                       <?php 
					   	if($districtvalue['districtstatus']=='Active'){ ?>
                       <td><a href="districtstatus.php ? id=<?php echo $districtvalue['districtid'];?>" class="btn btn-success btn-sm"><?php echo $districtvalue['districtstatus']; ?></a></td> 
                       <?php }else{ ?>
                       <td><a href="districtstatus.php ? id=<?php echo $districtvalue['districtid'];?>" class="btn btn-danger btn-sm""><?php echo $districtvalue['districtstatus']; ?></a></td> <?php } ?>
                       
                       <td><a class="btn btn-primary" href="editdistrict.php ? id=<?php echo $districtvalue['districtid']; ?>"><i class='fa fa-edit'>Edit</i></a></td>
                       <td><a class="btn btn-danger" href="deletedistrict.php ? id=<?php echo $districtvalue['districtid']; ?>"><i class="fa fa-pencil">Delete</i></a></td>
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
    <script>
    function districtValidation()
			{
			var state=document.getElementById('statename');
			var stateval=document.getElementById('stateval');
			if(state.value==""){
				stateval.innerHTML="Please Select State";
				stateval.style.color="#CC1616";
				state.focus();
				return false;
			}else{
				stateval.style.visibility="hidden";
			}
			var districtname=document.getElementById('districtname');
			var districtval=document.getElementById('districtval');
			if(districtname.value.trim()==""){
				districtval.innerHTML="Please Select State";
				districtval.style.color="#CC1616";
				districtname.focus();
				return false;
			}else{
				districtval.style.visibility="hidden";
			}
		}
		function districtNameValidation(key){
			var asciicode=key.keyCode;
			if(!(asciicode==8 || asciicode==32 || asciicode==127)&&(asciicode<65 || asciicode>90) &&(asciicode<97 || asciicode>122)){
				return false;
			}else{
				return true;
			}
		}
    </script>
    
</body>
</html>
