<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "get_your_wheels_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

// Total bookings
$booking_query = $conn->prepare("SELECT COUNT(*) AS total FROM booking_tbl WHERE user_id = ?");
$booking_query->bind_param("i", $user_id);
$booking_query->execute();
$booking_result = $booking_query->get_result()->fetch_assoc();
$total_bookings = $booking_result['total'] ?? 0;

// Total payments
$payment_query = $conn->prepare("SELECT SUM(payment_amount) AS total_payment FROM payment_tbl WHERE user_id = ?");
$payment_query->bind_param("i", $user_id);
$payment_query->execute();
$payment_result = $payment_query->get_result()->fetch_assoc();
$total_payment = $payment_result['total_payment'] ?? 0;

// User info
$user_query = $conn->prepare("SELECT * FROM user_tbl WHERE u_id = ?");
$user_query->bind_param("i", $user_id);
$user_query->execute();
$user = $user_query->get_result()->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Dashboard</title>
  <link rel="stylesheet" href="asset/css/dashboard.css" />
</head>
<body>
  <div class="dashboard-container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>

    <div class="cards-container">
      <div class="card">
        <h3>Total Bookings</h3>
        <p><?php echo $total_bookings; ?></p>
      </div>
      <div class="card">
        <h3>Total Payment</h3>
        <p>₹<?php echo $total_payment; ?></p>
      </div>
      <div class="card">
        <h3>Your Details</h3>
        <ul>
          <li><strong>Email:</strong> <?php echo $user['u_email']; ?></li>
          <li><strong>Mobile:</strong> <?php echo $user['u_mobile']; ?></li>
          <li><strong>State:</strong> <?php echo $user['u_state']; ?></li>
          <li><strong>Gender:</strong> <?php echo $user['u_gender']; ?></li>
          <li><strong>DOB:</strong> <?php echo $user['u_dob']; ?></li>
        </ul>
      </div>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
  </div>
</body>
</html>
