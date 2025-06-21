<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Signup</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: #f4f6f9;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .signup-container {
      background-color: #ffffff;
      padding: 2rem 3rem;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 420px;
    }

    .signup-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .signup-container form input {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }

    .signup-container form button {
      width: 100%;
      background-color: #696cff;
      color: #fff;
      padding: 0.75rem;
      font-size: 1rem;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .signup-container form button:hover {
      background-color: #5a5ee6;
    }

    .signup-container p {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.95rem;
    }

    .signup-container a {
      color: #696cff;
      text-decoration: none;
      font-weight: 500;
    }

    .msg {
      text-align: center;
      margin-bottom: 1rem;
      font-size: 0.95rem;
      color: #d9534f;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Admin Signup</h2>

    <?php if (!empty($message)): ?>
      <div class="msg"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST" action="">
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="admin-login.php">Login here</a></p>
  </div>
</body>
</html>
