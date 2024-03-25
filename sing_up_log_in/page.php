<?php
session_start();
include('../mysql/mysql.php');


if (isset($_POST['logout'])) {
    session_destroy();
    header('location:registration.php');
    exit();
}

if (!isset($_SESSION['loggedInUser'])) {
    header('location: registration.php');
}



$loggedInUserId = $_SESSION['loggedInUser']['id'];
$sql = "SELECT * FROM `users` WHERE `id` = $loggedInUserId";
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./page.css">
</head>

<body>
    <?php
    include('../header/header.php');
    ?>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="User_Header">
            <div class="User_Img_Box">
                <img src="../uploads/<?php echo $row['img']; ?>">
            </div>
            <div class="User_Info">
                <div>
                    <h3><?php echo $row['name']; ?></h3>
                </div>
                <div>
                    <h4><?php echo $row['lastname']; ?></h4>
                </div>
                <form method="post" action="../sing_up_log_in/logout.php">
                    <button type="submit" name="logout">Exit</button>
                </form>
                <a href="../sing_up_log_in/edit.php?id=<?php echo $row['id']; ?>?>">Edit</a>
            </div>
        </div>
    <?php } ?>
    <?php
    include('../scroll_up/scroll.php');
    include('../footer/footer.php');
    ?>
    <script src="./page.js"></script>
</body>

</html>