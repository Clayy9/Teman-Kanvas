<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "teman_kanvas";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Database Error!");
}
?>