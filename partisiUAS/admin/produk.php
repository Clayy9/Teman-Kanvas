<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "tambah") {
    include "produk_tambah.php";
} else if ($aksi == "edit") {
    include "produk_edit.php";
} else {
    ?>

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Product Management</h1>
            <p class="mb-4">
                This page is used to manage product data.
            </p>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-custom">Data Produk</h6>
                </div>
                <div class="card-body">
                    <a href="admin.php?menu=produk&aksi=tambah" class="btn btn-custom">
                        <i class="fas fa-plus"></i> Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th width="50">Photo</th>
                                    <th width="200">Product Name</th>
                                    <th width="450">Description</th>
                                    <th width="60">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "SELECT * FROM tbproduct";
                                $query = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($query)) {
                                    $link_edit = "admin.php?menu=produk&aksi=edit&id=$row[id]";
                                    $link_hapus = "produk_delete.php?id=$row[id]";

                                    $foto = "default.jpg";
                                    if ($row['photo'] != "") {
                                        $foto = $row['photo'];
                                    }
                                    $link_foto = "./images/produk/$foto";

                                    ?>
                                    <tr>
                                        <td>
                                        <?= $no; ?>
                                        </td>
                                        <td>
                                            <img src="<?= $link_foto; ?>" width="75" height="75">
                                        </td>
                                        <td>
                                        <?= $row['product_name']; ?>
                                        </td>
                                        <td>
                                        <?= $row['description']; ?>
                                        </td>

                                        <td>
                                            <a href="<?= $link_edit; ?>" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                                            <a href="<?= $link_hapus; ?>" class="btn btn-danger"
                                                onclick="return confirm('Do you want to delete the data?');"> <i
                                                    class="fas fa-trash-alt"></i></a>
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