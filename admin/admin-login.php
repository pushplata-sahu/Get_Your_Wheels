<?php
session_start();
if (isset($_SESSION['admin_logged_in'])) {
  header("Location: index.php");
  exit();
}

include("config.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $stmt = $conn->prepare("SELECT password FROM admin_tbl WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
      $_SESSION['admin_logged_in'] = true;
      $_SESSION['admin_username'] = $username;
      $_SESSION['login_success'] = "✅ Login successful!";
      header("Location: index.php");
      exit();
    } else {
      $error = "❌ Invalid password!";
    }
  } else {
    $error = "❌ Username not found!";
  }
  $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/vendor/css/core.css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/boxicons/css/boxicons.css" />
</head>
<body style="background-color: #f2f2f2;">
  <div class="container mt-5" style="max-width: 400px; margin: auto;">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-center mb-4">Admin Login</h4>

        <?php if (!empty($error)): ?>
          <div class="alert alert-danger text-center"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required />
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>

        <p class="text-center mt-3">
          Don’t have an account? <a href="admin-signup.php">Sign up</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
