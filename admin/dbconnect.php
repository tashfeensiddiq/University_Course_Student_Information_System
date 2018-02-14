<?php
// Enter your Host, username, password, database below.
//doing database connections
$con = mysqli_connect("localhost","root","","cse_project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>