<?php
 session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['ref'];
$op = $_GET['op'];

switch ($op) {
	case 'A':
		$sql =" UPDATE `bookings` SET `Status` = 'APPROVED' WHERE `bookings`.`orderID` = '$id' ";
		$Res=mysqli_query($conn, $sql);
		break;
	case 'R':
		$sql =" UPDATE `bookings` SET `Status` = 'REJECTED' WHERE `bookings`.`orderID` = '$id' ";
			$Res=mysqli_query($conn, $sql);
		break;
}

header('Location: old.php');
?>
