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
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">                       
      <div class="center" ><h1>Login</h1></div>
        <form action="login_code.php" method="POST">
          Username: <input type="text" name="username" class="form-control" required placeholder="Enter Name..."><br><br>
          Password: <input type="password" name="password" class="form-control" required placeholder="Enter Password..." ><br><br>
          <center><button type="submit" name="login" class="btn btn-secondary">Login</button><br><br></center>
        </form>
      </div>       
      <div class="col-md-3"></div>
    </div>
    <?php include 'includes/newsletter_form.php' ?>
    <center><h6><b>We are hiring</b></h6></center>
    <?php include 'includes/footer.php' ?>
  </div>
</body>
</html>
