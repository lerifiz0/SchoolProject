<?php
// This example is for educational purposes only.
// Do not use for any unauthorized activities.

// Your PHP code goes here

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "school_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example query
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. ", name: " . $row["name"]. " - \n";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
