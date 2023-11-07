<?php
session_start();

include("koneksi.php");
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
</head>

<body>

    <div class="wrapper">
        <h1>Login</h1>
        <form name="from" action="login.php" onsubmit="return isvalid()" method="POST">
            <div class="input-box">
                <input type="text" class="User" name="user">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" class="Password" name="pass">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <!-- button -->
            <div>
                <input type="submit" class="btn" name="submit"/>
            </div>
            <!-- button end -->
            <div class="register-link">
                <p>Don't have an account?<a href="#">Register</a></p>
            </div>
        </form>
    </div>
    <script>
        function isvalid() {
            var Username = document.wrapper.Username.value;
            var Password = document.wrapper.Password.value;
            if (Username.length == "" && Password.length == "") {
                alert("Username and Password field is empty");
                return false
            }
            else {
                if (Username.length == "") {
                    alert("Username is empty");
                    return false
                }
                {
                    if (Password.length == "") {
                        alert("Password is empty");
                        return false
                    }
                }
    </script>


</body>

</html>