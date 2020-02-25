<?php 

include_once 'includes/connect.php';    
    	
$name      = mysqli_real_escape_string($conn,$_POST['name']);
$date      = mysqli_real_escape_string($conn,$_POST['date']);

$sql = "INSERT INTO hindifilm (name, date) VALUES(?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
	}

else {
mysqli_stmt_bind_param($stmt, "ss", $name, $date);
mysqli_stmt_execute($stmt);
echo "Data saved";
header("Location:datasaved.php");

$conn->close();
}

?>