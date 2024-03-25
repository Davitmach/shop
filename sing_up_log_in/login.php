
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <?php
    include('../header/header.php');
    ?>
    <div class="Login_container">
        <form action="../sing_up_log_in/login_verify.php" method="post" >
            <div>
                <h1>Log In</h1>
            </div>

            <div><input name="Log_email" id="Email" type="text" placeholder="Email" required></div>
            <div><input name="Log_password" id="Password" type="text" placeholder="Password" required></div>
            <div>
                <div><button type="submit" onclick="loginUser()">LOG IN</button></div>
                <div><a href="./registration.php">Sing Up</a></div>
            </div>

        </form>
    </div>
    <?php
    include('../scroll_up/scroll.php');
    include('../footer/footer.php');
    ?>
    <script src="../sing_up_log_in/login.js"></script>
</body>

</html>