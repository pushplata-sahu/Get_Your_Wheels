<?php
// Start the session and include the database connection
session_start();
include('config.php');  // This ensures that $conn is defined before you use it.

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin-login.php");
    exit();
}

// Check for login success message
if (isset($_SESSION['login_success'])) {
    echo "<script>alert('" . $_SESSION['login_success'] . "');</script>";
    unset($_SESSION['login_success']);
}

// Check if the connection is properly established
if (!$conn) {
    die("Connection not established.");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Sidebar Menu -->
      <?php include("sidebar.php"); ?>

      <!-- Main Layout -->
      <div class="layout-page">

        <!-- Top Navbar with Logout -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search Bar -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>

            <!-- User Dropdown -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"><?= $_SESSION['admin_username'] ?? 'Admin' ?></span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><div class="dropdown-divider"></div></li>
                  <li>
                    <a class="dropdown-item" href="logout.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- /Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Main Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Dashboard / Analytics</h4>

            <!-- Welcome Card -->
            <div class="row">
              <div class="col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Welcome back, <?= $_SESSION['admin_username'] ?? 'Superstar' ?> 👋</h5>
                    <p class="card-text">Your admin panel is ready to use. Use the sidebar to explore and manage the site.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- 👥 Registered Users Table -->
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>State</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Fetch user data
                  $result = $conn->query("SELECT * FROM user_tbl ORDER BY u_id DESC");
                  while ($row = $result->fetch_assoc()) {
                  ?>
                    <tr>
                      <td><?= htmlspecialchars($row['u_id'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= htmlspecialchars($row['u_name'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= htmlspecialchars($row['u_mobile'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= htmlspecialchars($row['u_email'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= htmlspecialchars($row['u_state'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= ($row['u_dob'] == '0000-00-00') ? 'N/A' : htmlspecialchars($row['u_dob'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= ucfirst(htmlspecialchars($row['u_gender'], ENT_QUOTES, 'UTF-8')) ?></td>
                      <td><?= htmlspecialchars($row['u_password'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td><?= htmlspecialchars($row['u_add'], ENT_QUOTES, 'UTF-8') ?></td>
                      <td>
                        <a href="edit_user.php?id=<?= $row['u_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="copy_user.php?id=<?= $row['u_id'] ?>" class="btn btn-info btn-sm">Copy</a>
                        <a href="delete_user.php?id=<?= $row['u_id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>
          <!-- /Main Content -->

          <!-- Footer -->
          <?php include("footer.php"); ?>
        </div>
        <!-- /Content wrapper -->
      </div>
      <!-- /Layout page -->
    </div>
    <!-- /Layout container -->

    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- /Layout wrapper -->

  <!-- Core JS -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/dashboards-analytics.js"></script>
</body>
</html>
