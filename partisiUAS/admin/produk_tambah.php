<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Product Management</h1>
    <p class="mb-4">
        This page is used to manage product data.
    </p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-custom">Form Add Data Product</h6>
        </div>
        <form action="produk_insert.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label>Foto:</label>
                    <input type="file" name="photo" class="form-control">
                    <sup class="text-danger">*Leave blank if no photo</sup>
                </div>

                <div class="form-group">
                    <label>Nama Produk:</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Masukan nama produk"
                        required>
                </div>

                <div class="form-group">
                    <label>Deskripsi:</label>
                    <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                    <sup class="text-danger">*Leave blank if no description</sup>
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
        </form>

    </div>