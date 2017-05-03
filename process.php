<?php
  $dbc = mysqli_connect("localhost", "root", "", "authentication") 
  or die("Error connecting to mysql server");

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query =  "INSERT INTO users(username , email, password) VALUES('$username', '$email', '$password')";
  $result = mysqli_query($dbc, $query ) or die("Error quering database");


  mysqli_close($dbc);
  echo "successfuly submited";
  ?>
