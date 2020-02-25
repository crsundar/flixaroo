<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php'?>
</head>
<body>  
	<div class="container">
	    <div class="top">
	      	<h1><b>Flixaroo.com</b></h1>
	      	<h6><b><i>Web of the Film World</i></b></h6>
	    </div>
	    <?php include 'nav.php'?>
	    <center><h3 style="color:grey;";>View Uploads</h3><br></center>
	    <div class="card-group">
			<div class="card bg-basic">
				<div class="card-header text-white text-center bg-secondary">Tamil</div>
			    <div class="card-body text-center">
			    	<a href="display_tam_movies.php" class="btn btn-success" role="button">View Tamil Movies</a>					
			    </div>
			    <div class="card-body text-center">
			    	<a href="display_tam_serials.php" class="btn btn-success" role="button">View Tamil Serials</a>					
			    </div>
			    <div class="card-body text-center">
			    	<a href="display_tam_songs.php" class="btn btn-success" role="button">View Tamil Songs</a>					
			    </div>
			</div>
			<div class="card bg-basic">
				<div class="card-header text-white text-center bg-secondary">English</div>
				<div class="card-body text-center">
			      	<a href="display_eng_movies.php" class="btn btn-primary" role="button">View English Movies</a>
			    </div>
			    <div class="card-body text-center">
			      	<a href="display_eng_ani_films.php" class="btn btn-primary" role="button">View English Animation Movies</a>
			    </div>
			</div>
			<div class="card bg-basic">
				<div class="card-header text-white text-center bg-secondary">Hindi</div>
			    <div class="card-body text-center">
			        <a href="display_hindi_movies.php" class="btn btn-warning" role="button">View Hindi Movies</a>
			    </div>
			    <div class="card-body text-center">
			        <a href="display_hindi_songs.php" class="btn btn-warning" role="button">View Hindi Songs</a>
			    </div>
			</div>
		</div>


	<?php include 'includes/newsletter_form.php' ?>
    <center><h6><b>We are hiring</b></h6></center>
    <?php include 'includes/footer.php' ?>
	</div>
</body>
</html>    