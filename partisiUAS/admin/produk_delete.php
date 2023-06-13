<?php
include "connection.php";

$idproduk = mysqli_real_escape_string($con, $_GET['id']);

$qry = mysqli_query($con, "SELECT * FROM tbproduct WHERE id='$idproduk' ");
$row = mysqli_fetch_array($qry);

if (!empty($row['photo'])) {
    unlink("./images/produk/$row[photo]"); //hapus file foto
}

$sql = "DELETE FROM tbproduct WHERE id='$idproduk' ";
mysqli_query($con, $sql);

$url = "admin.php?menu=produk";
$pesan = "Data successfully deleted";

echo "<script> alert('$pesan'); location='$url'; </script>";
?>