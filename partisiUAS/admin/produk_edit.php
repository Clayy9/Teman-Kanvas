<?php
$idproduk = isset($_GET['id']) ? $_GET['id'] : "";
$idproduk = mysqli_real_escape_string($con, $idproduk);
$sql = "SELECT * FROM tbproduct WHERE id='$idproduk' ";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
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
            <h6 class="m-0 font-weight-bold text-custom">Form Edit Data Product</h6>
        </div>
        <form action="produk_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idp" value="<?= $data['id']; ?>">
            <div class="card-body">
                <div class="form-group">
                    <label>Photo:</label>
                    <input type="file" name="photo" class="form-control">
                    <sup class="text-danger">*Leave blank if you don't change the photo</sup>
                </div>

                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Masukan nama produk"
                        required value="<?= $data['product_name']; ?>">
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea name="description" class="form-control" rows="5"><?= $data['description']; ?></textarea>
                    <sup class="text-danger">*Leave blank if you don't change the description</sup>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-custom">
                    <i class="fas fa-save"></i> Save
                </button>

                <a href="admin.php?menu=produk" class="btn btn-danger">
                    <i class="fas fa-arrow-left"></i> Cancel
                </a>
            </div>
    </div>
    </form>

</div>