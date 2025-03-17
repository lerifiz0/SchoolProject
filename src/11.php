<?php
$name = $_POST['name'];
$email = $_POST['email'];
if(!empty($name) && !empty($email)) {
  $sql = "INSERT INTO users (name, email) VALUES ('{$name}', '{$email}')";
  if(mysqli_query($conn, $sql)) {
    echo "User added successfully";
  } else {
    echo "Error: cannot add user to database";
  }
} else {
  echo "Please enter a valid name and email address";
}
?>