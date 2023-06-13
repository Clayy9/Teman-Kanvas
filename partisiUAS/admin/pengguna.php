<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "tambah") {
    include "pengguna_tambah.php";
} else if ($aksi == "edit") {
    include "pengguna_edit.php";
} else {
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
                    <h6 class="m-0 font-weight-bold text-custom">User Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th width="100">Username</th>
                                    <th width="100">Fullname</th>
                                    <th width="100">Email</th>
                                    <th width="100">Phone Number</th>
                                    <th width="150">Status</th>
                                    <th width="150">Subscription</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "SELECT * FROM tbuser";
                                $query = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($query)) {
                                    $link_edit = "admin.php?menu=user&aksi=edit&id=$row[id]";
                                    $link_hapus = "pengguna_delete.php?id=$row[id]";
                                    ?>
                                    <tr>
                                        <td>
                                        <?= $no; ?>
                                        </td>
                                        <td>
                                        <?= $row['username']; ?>
                                        </td>
                                        <td>
                                        <?= $row['fullname']; ?>
                                        </td>
                                        <td>
                                        <?= $row['email']; ?>
                                        </td>
                                        <td>
                                        <?= $row['phone_number']; ?>
                                        </td>
                                        <td>
                                        <?= $row['status']; ?>
                                        </td>
                                        <td>
                                        <?= $row['subscription']; ?>
                                        </td>
                                        <td>
                                            <a href="<?= $link_edit; ?>" class="btn btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="<?= $link_hapus; ?>" class="btn btn-danger"
                                                onclick="return confirm('Do you want to delete this data?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    <?php
}
?>