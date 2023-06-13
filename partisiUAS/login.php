<?php
$bg = "./assets/bg_login.png";
?>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/2c04a65836.js" crossorigin="anonymous"></script>
    <title>Login - Teman Kanvas</title>
    <link rel="icon" type="image/x-icon" href="./assets/faviconTK.ico">
    <link rel="stylesheet" href="style_login.css">
    <style type="text/css">
        body {
            background-image: url('<?php echo $bg; ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
            image-rendering: -webkit-optimize-contrast;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="containerForm"><br>
            <a href="index.php"><i class="fa-solid fa-xmark"
                    style="color: #c0c0c2; font-size:20px; margin-bottom:-12px;"></i></a>
            <center><img width="50" src="./assets/Logo1.svg" style="margin-bottom:20px;"></center>
            <h1>Login</h1>
            <form method="post" action="sv_login.php">
                <h3>Email</h3>
                <div class="inputText">
                    <i class="fa-solid fa-user" style="color: #c0c0c2;"></i>
                    <input class="textField" type="text" name="email" id="email" placeholder="Type your email..."
                        required />
                </div>
                <h3>Password</h3>
                <div class="inputText">
                    <i class="fa-solid fa-lock" style="color: #c0c0c2;"></i>
                    <input class="textField" type="password" name="password" id="password"
                        placeholder="Type your password..." required />
                </div>
                <div class="button_submit">
                    <center>
                        <td colspan="2"><input class="button" type="submit" value="Login" name="submit"></td>
                    </center>
                </div>
            </form>
            <div class="register">Don't have an account? <a href="register.php" style="font-weight: bold">Sign up
                    now!</a></div><br>
        </div>
    </div>
</body>

</html>