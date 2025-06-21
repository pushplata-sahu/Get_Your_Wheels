<?php
include("config.php"); // DB connection

$username = 'Lata';
$password = '@1011'; // Change this as you like
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if already exists
$stmt = $conn->prepare("SELECT id FROM admin_tbl WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
  $stmt = $conn->prepare("INSERT INTO admin_tbl (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $username, $hashed_password);
  if ($stmt->execute()) {
    echo "✅ Admin user created successfully!";
  } else {
    echo "❌ Error: " . $conn->error;
  }
} else {
  echo "⚠️ Username already exists!";
}
$stmt->close();
$conn->close();
?>
