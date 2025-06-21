<?php
$host = "localhost";           // Hostname
$username = "root";            // Default username for XAMPP
$password = "";                // Default password for XAMPP (empty)
$database = "get_your_wheels_db";  // Your DB name

// Create connection using mysqli
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    // If the connection fails, terminate with an error message
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Success message for testing (can remove later)
// echo "Database connected successfully!";
?>
