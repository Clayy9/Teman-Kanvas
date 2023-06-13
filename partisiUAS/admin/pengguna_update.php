<?php
include "connection.php";

$idk = mysqli_real_escape_string($con, $_POST['idk']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
$status = mysqli_real_escape_string($con, $_POST['status']);
$subscription = mysqli_real_escape_string($con, $_POST['subscription']);

$sql = "UPDATE tbuser SET username='$username', fullname='$fullname', email='$email', phone_number='$phone_number', status='$status', subscription='$subscription' WHERE id='$idk' ";
mysqli_query($con, $sql);

$url = "admin.php?menu=user";
$pesan = "Data successfully updated";

echo "<script> alert('$pesan'); location='$url'; </script>";

?>