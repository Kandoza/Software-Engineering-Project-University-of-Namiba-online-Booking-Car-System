<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <?php
    session_start();
    echo 
   
      '<a class="navbar-brand" href="#">'.$_SESSION['username'].'</a>';
      
   echo ' </div>
    <ul class="nav navbar-nav">
      <li  class="active"><a href="welcome.php">Home</a></li>
      <li><a href="request.php">Request for transport</a></li>
      <li><a href="mybookings.php">My Bookings</a></li>
      <li><a href="index.php?action=logout">Logout</a></li>
      
    </ul>';
require 'connect.php';
$id = $_SESSION['username'];
$sql = "SELECT FNAME, LNAME FROM EMP WHERE USERNAME ='$id' ";
$result = $conn->query($sql);

       if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
           $FNAME = $row['FNAME'];
           $LNAME = $row['LNAME'];

echo "
  </div>
  </div>
  <center>
    <p>
      <h2>Hellow</h1>
      <h3>Mr $FNAME $LNAME</h2>
    </p>
  </center>
  
</nav>
</body>
</html>";
    }
     
} else {
     echo "0 results";
}

$conn->close();
?>