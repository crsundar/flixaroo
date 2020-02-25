<!DOCTYPE html>
<html lang="en">
<head>
  	<?php include 'includes/head.php';?>
  	<?php include 'includes/connect.php';?>
</head>
<body>  
  	<div class="container">
	    <div class="top">
	      	<h1><b>Flixaroo.com</b></h1>
	      	<h6><b><i>Web of the Film World</i></b></h6>
	    </div>
	    <?php include 'nav1.php';?>
	    <?php
	    session_start();
		echo "Welcome ".$_SESSION['username'];
		?>
	    <div class="row justify-content-center">	    	
	    	<center><h3 style="color:grey;";>To View or Upload press the appropriate button below and hope for the best</h3><br></center> 
	    	<div class="col-md-6">
	      	<center><a href="display.php" class="btn btn-info btn-lg p-5" role="button">View</a></center>	
	      	</div>   	
	      	<div class="col-md-6" >
	      	<center><a href="upload.php" class="btn btn-success btn-lg p-5" role="button">Upload</a></center>	
	      	</div>	      		      	
	    </div>
	    <?php include 'includes/newsletter_form.php' ?>
    	<center><h6><b>We are hiring</b></h6></center>
    	<?php include 'includes/footer.php' ?>
	</div>
</body>
</html>














