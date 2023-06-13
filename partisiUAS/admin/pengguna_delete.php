<?php
include "connection.php";

$idk = mysqli_real_escape_string($con, $_GET['id']);

$sql = "DELETE FROM tbuser WHERE id = '$idk'";
mysqli_query($con, $sql);

$url = "admin.php?menu=user";
$pesan = "Data successfully deleted";

echo "<script> alert('$pesan'); location='$url'; </script>";
?>