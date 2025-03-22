<?php
// Initialize session
session_start();

// Check if user is logged in (if not) or not
if (!isset($_SESSION["user_id"])) {
    // Redirect to login page
    header("Location: http://www.example.com/login");
    exit();
}

// Fetch data from a database
$data = $_POST['data'];

// Update the data
updateData($data);

// Log in successfully (optional, for demonstration purposes)
$logInSuccessfully('success');

?>
