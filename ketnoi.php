<?php
$servername = "localhost";
$usernamedb = "root";
$password = "";
$database = "data_chuyendi";

// Create connection
//$conn = new mysqli($servername, $username, $password, $database);

$conn = new mysqli($servername, $usernamedb, $password, $database);
mysqli_set_charset($conn,'UTF8');
// Check connection
if ($conn->connect_error) {
  die("" . $conn->connect_error);
}
                  
?>






