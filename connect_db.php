<?php
$servername = "localhost";
$username = "cpe0019";
$password = "jojo0969426931";
$db_name = "cpe0019";


// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}