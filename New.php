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
      <a class="navbar-brand" href="#">WelcomeAdmin</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li class="active"><a href="#">Manage Bookings</a></li>
      <li><a href="bookins.php">Approved Bookings</a></li>
      <li><a href="Rejected.php">Rejected Bookings</a></li>
    </ul>
      <a href="login"></a><button class="btn btn-danger navbar-btn">Logout</button></a>
  </div>
</nav>
  <h2>Bookings Table</h2>
  <p>list:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      
<?php
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

$sql = "SELECT firstname, lastname, username FROM MyGuests WHERE Status = ''";
$result = $conn->query($sql);

       if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
    echo  '<tr>
          <td scope= "row">'.$row["firstname"].'</td>
          <td>'.$row["lastname"].'</td>
          <td>'.$row["username"].'</td>
          <td><button class="btn btn-success navbar-btn">Approve</button>
          <button class="btn btn-danger navbar-btn">Reject</button>
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
