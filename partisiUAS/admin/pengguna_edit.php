<?php
$idk = isset($_GET['id']) ? $_GET['id'] : "";
$idk = mysqli_real_escape_string($con, $idk);
$sql = "SELECT * FROM tbuser WHERE id='$idk'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User Management</h1>
    <p class="mb-4">
        This page is used to manage user data.
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-custom">Form Edit Data User</h6>
        </div>
        <form action="pengguna_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idk" value="<?= $data['id']; ?>">
            <div class="card-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Type your username..." required
                        value="<?= $data['username']; ?>">
                </div>

                <div class="form-group">
                    <label>Fullname</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Type your fullname" required
                        value="<?= $data['fullname']; ?>">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Type your email" required
                        value="<?= $data['email']; ?>">
                </div>

                <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" name="phone_number" class="form-control" placeholder="Type your phone number ..."
                        required value="<?= $data['phone_number']; ?>">
                </div>

                <div class="form-group">
                    <label>Subscription</label>
                    <select name="subscription" class="form-control" required>
                        <option value="Subscribed">Subscribed</option>
                        <option value="Not Subscribe">Not Subscribe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-custom">
                    <i class="fas fa-save"></i> Save
                </button>
                <a href="admin.php?menu=user" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Cancel
                </a>
            </div>
        </form>
    </div>

</div>