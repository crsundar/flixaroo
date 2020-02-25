<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php'?>
  <?php include 'includes/connect.php' ?>
</head>
<body>  
	 <div class="container">
	    <div class="top">
		    <h1><b>Flixaroo.com</b></h1>
		    <h6><b><i>Web of the Film World</i></b></h6>
	    </div>
	    <?php include 'nav.php'?>
	    <center>To upload more go to <a href="upload.php">Upload</a></center>
	    <center><h3 style="color:grey;";>View English Animation Movies</h3><br></center>
	    <div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">	
			    <?php
				$sql = "SELECT * FROM englishanimationfilm";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

				?>
				<table style="width:100%">
					<tr>
						<th>Name of Movie</th>					
						<th>Date Entered</th>
					</tr>
				<?php

				while($row = $result->fetch_assoc()) {
					echo 	"<tr>
								<td>".$row["name"]."</td>						
								<td>".$row["date"]."</td>
							</tr>";    
				}
				}else {
				    echo "0 results";
				}
				$conn->close();
				?> 
				</table>
			</div> 
			<div class="col-md-3"></div>
		</div>
	<?php include 'includes/newsletter_form.php' ?>
    <center><h6><b>We are hiring</b></h6></center>
    <?php include 'includes/footer.php' ?>
	</div>
</body>
</html>
