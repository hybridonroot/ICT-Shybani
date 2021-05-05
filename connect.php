<?php
 $servername = "localhost";
$username = "ictsuppo_shybani";
$password = "abrata1234";
$dbname = "ictsuppo_shaybani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>