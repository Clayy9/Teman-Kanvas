<?php
include "connection.php";

$product_name = mysqli_real_escape_string($con, $_POST['product_name']);
$description = mysqli_real_escape_string($con, $_POST['deskripsi']);

$foto = "";
$foto_cek = $_FILES['photo']['name'];

if ($foto_cek != "") {
    $folder = "./images/produk"; //tempat di upload
    $foto_tmp = $_FILES['photo']['tmp_name']; //file yang diupload
    $foto_name = md5(date("YmdHis")); //nama foto yang baru
    $foto_split = explode(".", $foto_cek); //memecah nama foto
    $ext = end($foto_split);
    $foto = $foto_name . "." . $ext;

    move_uploaded_file($foto_tmp, "$folder/$foto"); //upload fotonya
}

$sql = "INSERT INTO tbproduct (product_name, photo, description) VALUES ('$product_name','$foto','$description')";

mysqli_query($con, $sql);

$url = "admin.php?menu=produk";
$pesan = "Data successfully saved";

echo "<script> alert('$pesan'); location='$url'; </script>";
?>