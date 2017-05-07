<?php
  $dbc = mysqli_connect("localhost", "root", "", "unam") 
  or die("Error connecting to mysql server");

  $required_from = $_POST['required_from'];
  $required_to = $_POST['required_to'];
  $contact = $_POST['contact'];
  $department = $_POST['department'];
  $budget_vote = $_POST['budget_vote'];
  $type_of_vehicle = $_POST['type_of_vehicle'];
  $No_person = $_POST['No_person'];
  $Document = $_POST['Document'];
  $route_distance = $_POST['route_distance'];
  $Time = $_POST['Time'];
  $Time2 = $_POST['Time2'];
  $route = $_POST['message'];
  $purpose_of_trip = $_POST['message2'];
 

  $query =  "INSERT INTO Request_for_transport (required_from, required_to, required_by, contact, department, budget_vote, route_distance, time, time2, route, purpose_of_trip)  VALUES('$required_from', '$required_to', '$required_by', '$contact', '$department', '$budget_vote', '$route_distance', '$route', '$time', '$time2', '$purpose_of_trip' )";
  $result = mysqli_query($dbc, $query ) or die("Error quering database");


  mysqli_close($dbc);
  echo "successfuly submited";
  ?>
