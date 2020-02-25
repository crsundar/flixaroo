<?php 
session_start();
include ('includes/connect.php');

if(isset($_POST['login'])){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM signup WHERE username = '$username' && password = '$password' ";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$username = $row["username"];
			$password = $row["password"];
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		}
		header("Location: welcome.php");
	}
	else
	{
		echo "Invalid email or password";
	}
}  
?>