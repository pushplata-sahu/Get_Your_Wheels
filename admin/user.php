<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: admin-login.php");
  exit();
}

include '../config/db.php'; // 🔁 Adjust path if needed

// Fetch users
$result = $conn->query("SELECT * FROM user_tbl ORDER BY u_id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include("sidebar.php"); ?>

      <div class="layout-page">
        <?php include("navbar.php"); ?>

        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Registered Users</h4>

            <div class="card">
              <h5 class="card-header">All Registered Users</h5>
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>City</th>
                      <th>State</th>
                      <th>PIN</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Image</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                      <tr>
                        <td><?= $row['u_id'] ?></td>
                        <td><?= $row['u_name'] ?></td>
                        <td><?= $row['u_mobile'] ?></td>
                        <td><?= $row['u_email'] ?></td>
                        <td><?= $row['u_city'] ?></td>
                        <td><?= $row['u_state'] ?></td>
                        <td><?= $row['u_pin'] ?></td>
                        <td><?= $row['u_dob'] ?></td>
                        <td><?= ucfirst($row['u_gender']) ?></td>
                        <td>
                          <?php if (!empty($row['u_image'])): ?>
                            <img src="../user/images/<?= $row['u_image'] ?>" alt="user" width="50" height="50" style="object-fit:cover;">
                          <?php else: ?>
                            N/A
                          <?php endif; ?>
                        </td>
                        <td><?= $row['u_add'] ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <?php include("footer.php"); ?>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/main.js"></script>
</body>
</html>
