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
	    <br>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
		  Upload Tamil Serials
		</button>

		<!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
			    <div class="modal-content">

				    <!-- Modal Header -->
				    <div class="modal-header">
				        <h4 class="modal-title">Upload a Tamil Serial</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				    </div>

				    <!-- Modal body -->
				    <div class="modal-body">
				        <form action="tam_serial_insert.php" method="POST">
							<div class="form-group">
							    <label>Serial Name:</label>
							    <input type="text" name="name" class="form-control" placeholder="Enter Serial Name...">
							</div>
							<div class="form-group">
							    <label>Entry Date:</label>
							    <input type="date" name="date" class="form-control" placeholder="Enter Date...">
							</div>
							<button type="submit" class="btn btn-success">Upload</button>
						</form>
				    </div>
			    </div>
			</div>
		</div>
	<?php include 'includes/newsletter_form.php' ?>
    <center><h6><b>We are hiring</b></h6></center>
    <?php include 'includes/footer.php' ?>
	</div>
</body>
</html>