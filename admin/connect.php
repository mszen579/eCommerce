<?php
//data source name = dsn
$dsn = "localhost";
$user = "root";
$pass = "";

// Create connection
$con = new mysqli($dsn, $user, $pass);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Your are Connected successfully";