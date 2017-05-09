<!DOCTYPE html>
<html lang="en">
<head>
  <title>old</title>
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
      <li><a href="home.php">Home</a></li>
      <li><a href="old.php">Applications</a></li>
      <li><a href="rejected.php">Rejected Applications</a></li>
      <li class="active"><a href="approved.php">Approved Applications</a></li>
      <li><a href="vehicles.php">Add Vehicle</a></li>
      <li><a href="index.php?action=logout">Logout</a></li>
      
    </ul>
    
  </div>
</nav>
  <h2>Bookings Table</h2>
  <p>list:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Ref</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Date</th>
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

$sql = "SELECT Bookings.orderID, EMP.FNAME, EMP.LNAME, Bookings.USERNAME, Bookings.DateAccessed FROM Bookings, EMP WHERE EMP.USERNAME = Bookings.USERNAME AND Status ='APPROVED'  ORDER BY Bookings.orderID ";
$result = $conn->query($sql);

       if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
           $orderID = $row['orderID'];
           $session_id = $_SESSION['orderID'] = $orderID;
           $FNAME = $row['FNAME'];
           $LNAME = $row['LNAME'];
           $USERNAME =$row['USERNAME'];
           $Date = $row['DateAccessed'];

           echo "<tr>
                 <td><a href=order.php>$orderID<a/></td>
                 <td>$FNAME</td>
                 <td>$LNAME</td>
                 <td>$USERNAME</td>
                 <td>$Date</td>
                 </tr>";

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
