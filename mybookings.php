<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Bookings</title>
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
      <li><a href="welcome.php">Home</a></li>
      <li><a href="request.php">Request for transport</a></li>
      <li   class="active"><a href="mybookings.php">My Bookings</a></li>
      <li><a href="index.php?action=logout">Logout</a></li>
      
    </ul>
    
  </div>
</nav>
  <h2>My Bookings</h2>
  <p>list:</p>            
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Reference</th>
        <th>Vehicle</th>
        <th>Unit Price/KM</th>
        <th>Total Cost</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>';

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
$username = $_SESSION['username']; 

$sql = "SELECT * FROM Bookings inner join vehicles on bookings.vehicle_id  = vehicles.id WHERE USERNAME= '$username'  ";
$result = $conn->query($sql);

       if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
    echo  '<tr>
          <td scope= "row">'.$row["orderID"].'</td>
           <td>'.$row["make"].''.$row["model"] .'</td>
           <td>N$'.$row["price"].'</td>
           <td>N$'.number_format(($row["price"] * $row["DISTANCE"]),2,'.',',') .'</td>
          <td>'.$row["DateAccessed"].'</td>
          <td>'.$row["Status"].'</td>
          </tr>'
           ;

     }
} else {
     echo "0 results";
}

$conn->close();
?>
    </tbody>
  </table>
</div>

</body>
</html>
