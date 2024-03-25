<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./registration.css">
</head>

<body>
    <?php
    include('../header/header.php');
    ?>
    <div class="Registration_container">
        <form action="../sing_up_log_in/upload.php" method="post" enctype='multipart/form-data'>
            <div>
                <h1>Sing Up</h1>
            </div>
            <div><input name="Name" id="Name" type="text" placeholder="Name" required></div>
            <div><input name="Lastname" id="Lastname" type="text" placeholder="Lastname" required></div>
            <div><input name="Email" id="Email" type="text" placeholder="Email" required></div>
            <div><input name="Password" id="Password" type="text" placeholder="Password" required></div>
            <div><input name="Img" id="Img" type="file" placeholder="Img" required>
            </div>
            <div>
                <div><button id="Reg" onclick="registerUser()" type="submit">Sing Up</button></div>
                <div><a href="./login.php">Log In</a></div>
            </div>

        </form>
    </div>
    <?php
    include('../scroll_up/scroll.php');
    include('../footer/footer.php');
    ?>
    <script src="../sing_up_log_in/registration.js"></script>
</body>

</html>