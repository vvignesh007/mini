
<?php
$servername = "localhost";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  
echo "Connected successfully";
?>