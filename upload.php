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
	    <br><center>To view upload click <a href="display.php">View Uploads</a></center>
	    <br><center><h3 style="color:grey;";>Click a Button of your choice to Upload</h3><br></center>
	    <div class="card-group">

			<div class="card bg-basic">
				<div class="card-header text-white text-center bg-secondary">Tamil</div>
			    <div class="card-body text-center">
			        <a href="upload_tam_film.php" class="btn btn-success" role="button">Upload Tamil Movies</a>
			    </div>
			    <div class="card-body text-center">
			        <a href="upload_tam_serial.php" class="btn btn-success" role="button">Upload Tamil Serials</a>
			    </div>
			    <div class="card-body text-center">
			        <a href="upload_tam_songs.php" class="btn btn-success" role="button">Upload Tamil Songs</a>
			    </div>
			</div>

			<div class="card bg-basic">
				<div class="card-header text-white text-center bg-secondary">English</div>
			    <div class="card-body text-center">
			    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
					  	<a href="upload_eng_film.php" class="btn btn-primary" role="button">Upload English Movies<a>
					</button>
					<br><br>
                	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
					  	<a href="upload_eng_ani_film.php" class="btn btn-primary" role="button">Upload English Animation Movies</a>
					</button>                    
			    </div>
			</div>
			    
			<div class="card bg-basic">
				<div class="card-header text-white text-center bg-secondary">Hindi</div>
			    <div class="card-body text-center">
				    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
						<a href="upload_hindi_film.php" class="btn btn-warning" role="button">Upload Hindi Movies</a>
					</button>
					<br><br>
					<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
						<a href="upload_hindi_songs.php" class="btn btn-warning" role="button">Upload Hindi Songs</a>
					</button>
				</div>
			</div>
		</div>
	    <?php include 'includes/newsletter_form.php' ?>
    	<center><h6><b>We are hiring</b></h6></center>
    	<?php include 'includes/footer.php' ?>
	</div>
</body>
</html>