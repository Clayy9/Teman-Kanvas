<?php
include "connection.php";

$idproduk = mysqli_real_escape_string($con, $_POST['idp']);
$product_name = mysqli_real_escape_string($con, $_POST['product_name']);
$description = mysqli_real_escape_string($con, $_POST['description']);

//update data teks
$sql = "UPDATE tbproduct SET id='$idproduk', product_name='$product_name', description='$description' WHERE id='$idproduk' ";

mysqli_query($con, $sql);

$foto_cek = $_FILES['photo']['name'];

if ($foto_cek != "") {
    $folder = "./images/produk"; //tempat di upload
    $foto_tmp = $_FILES['photo']['tmp_name']; //file yang diupload
    $foto_name = md5(date("YmdHis")); //nama foto yang baru
    $foto_split = explode(".", $foto_cek); //memecah nama foto
    $ext = end($foto_split);
    $foto = $foto_name . "." . $ext;

    move_uploaded_file($foto_tmp, "$folder/$foto"); //upload fotonya

    //hapus foto lama
    $qry = mysqli_query($con, "SELECT * FROM tbproduct WHERE id='$idproduk' ");
    $row = mysqli_fetch_array($qry);

    if (!empty($row['photo'])) {
        unlink("./images/produk/$row[photo]"); //hapus file foto
    }

    // update foto baru
    $sql = "UPDATE tbproduct SET photo='$foto' WHERE id='$idproduk' ";

    mysqli_query($con, $sql);
}

$url = "admin.php?menu=produk";
$pesan = "Data successfully saved";

echo "<script> alert('$pesan'); location='$url'; </script>";
?>