<?php
  $dbc = mysqli_connect("localhost", "root", "", "authentication") 
  or die("Error connecting to mysql server");

  $username = $_POST['username'];
  $password = $_POST['password'];

    	

  $query =  "SELECT * FROM users WHERE username ='$username' AND password = '$password')";
  $result = mysqli_query($dbc, $query ) or die("Error quering database");



  mysqli_close($dbc);
  echo "successfuly submited";
