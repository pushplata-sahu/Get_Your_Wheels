<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error_message = "All fields are required!";
    } else {
        $conn = new mysqli("localhost", "root", "", "get_your_wheels_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM user_tbl WHERE u_email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // ✅ Using password_verify for hashed passwords
            echo "<pre>";
print_r($user); // See what's coming from DB
echo "Entered Password: " . $password . "<br>";
echo "Stored Hashed Password: " . $user['u_password'] . "<br>";
echo "</pre>";
            if (password_verify($password, $user['u_password'])) {
                echo "Entered Password: " . $password . "<br>";
echo "Stored Hashed Password: " . $user['u_password'] . "<br>";
                $_SESSION['user_id'] = $user['u_id'];
                $_SESSION['user_name'] = $user['u_name'];

                header("Location: dashboard.php");
                exit();
            } else {
                $error_message = "Invalid password!";
            }
        } else {
            $error_message = "No user found with that email!";
        }

        $stmt->close();
        $conn->close();
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="asset/css/login.css" />
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <?php if (isset($error_message)) {
        echo "<div class='error'>$error_message</div>";
    } ?>
    <form method="POST" action="login.php">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required />
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required />
  </div>
  <button type="submit" class="btn">Login</button>
</form>
    <div class="link">
      <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>
  </div>
</body>
</html>

