<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $mobile = trim($_POST['mobile']);
    $state = trim($_POST['state']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = trim($_POST['address']);

    // Validation
    if (empty($name) || empty($email) || empty($password)) {
        $error_message = "Name, email and password are required!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $conn = new mysqli("localhost", "root", "", "get_your_wheels_db");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if email exists
        $sql_check = "SELECT u_email FROM user_tbl WHERE u_email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $error_message = "Email already exists! Please login.";
        } else {
            // Insert new user
            $sql = "INSERT INTO user_tbl (u_name, u_email, u_password, u_mobile, u_state, u_dob, u_gender, u_add)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $name, $email, $hashed_password, $mobile, $state, $dob, $gender, $address);

            if ($stmt->execute()) {
                $_SESSION['user_id'] = $conn->insert_id;
                $_SESSION['user_name'] = $name;
                header("Location: dashboard.php");
                exit();
            } else {
                $error_message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $stmt_check->close();
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="asset/css/signup.css">
</head>

<body>
    <div class="form-container">
        <h2>Signup</h2>
        <?php
        if (isset($error_message)) {
            echo "<div class='error'>$error_message</div>";
        }
        ?>
        <form method="POST" action="signup.php">
            <div class="form-group"><label>Name:</label><input type="text" name="name" required></div>
            <div class="form-group"><label>Email:</label><input type="email" name="email" required></div>
            <div class="form-group"><label>Password:</label><input type="password" name="password" required></div>
            <div class="form-group"><label>Mobile:</label><input type="text" name="mobile"></div>
            <div class="form-group"><label>State:</label><input type="text" name="state"></div>
            <div class="form-group"><label>Date of Birth:</label><input type="date" name="dob"></div>
            <div class="form-group"><label>Gender:</label>
                <select name="gender">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>
            <div class="form-group"><label>Address:</label><textarea name="address"></textarea></div>
            <button type="submit" class="btn">Signup</button>
        </form>

        <div class="link">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>

</html>