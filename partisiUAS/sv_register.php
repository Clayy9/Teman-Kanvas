<?php
include "config/connection.php";

$username = $_POST['username'];
$_SESSION['name'] = $username;
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = md5($_POST['password']);
$confirmpassword = md5($_POST['confirmpassword']); //md5 untuk hashing

$sql_select = "SELECT * FROM tbuser WHERE email='$email' and password='$password'";
$query = mysqli_query($conn, $sql_select);
$num = mysqli_num_rows($query); //mengambil jumlah data yang muncul
$result = mysqli_fetch_array($query); //mengambil array data

if ($password != $confirmpassword) {
    ?>
    <script>
        alert("Password and Confirm Password Not Match");
    </script>
    <?php
    header("Refresh:0.1; url=register.php");

} else {
    if ($num > 0) {
        ?>
        <script>
            alert("Account Already Exist");
        </script>
        <?php
        header("Refresh:0.1; url=register.php");

    } else {
        $sql_insert = "INSERT INTO tbuser (username, fullname, email, phone_number, password, status, subscription) VALUES ('$username','$fullname','$email','$phonenumber','$password','User','Not Subscribe')";
        $run_query_check = mysqli_query($conn, $sql_insert);
        if (!$run_query_check) {
            die('Query error: ' . mysqli_error($conn));
        } else {
            ?>
            <script>
                alert("Registration Succeed");
            </script>
            <?php
            header("Refresh:0.1; url=login.php");
        }
    }
}
?>