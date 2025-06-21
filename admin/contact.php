<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Escape input to avoid SQL injection
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $subject = $conn->real_escape_string($_POST['subject']);
  $message = $conn->real_escape_string($_POST['message']);

  // Insert query
  $sql = "INSERT INTO contact_tbl (name, email, subject, message) 
          VALUES ('$name', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "success";
  } else {
    echo "error";
  }
} else {
  echo "invalid";
}
?>
