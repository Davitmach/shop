<?php
session_start();
include('../mysql/mysql.php');
$login_name = mysqli_real_escape_string($connect, $_POST['Log_email']);
$login_pass = mysqli_real_escape_string($connect, $_POST['Log_password']);
$sql = "SELECT * FROM `users` WHERE `email` = '$login_name'";
$result = mysqli_query($connect, $sql);
if ($result && mysqli_num_rows($result) > 0) {  // stuguma te tablicai mech tvyal uni te voch
    $row = mysqli_fetch_assoc($result);

    if (password_verify($login_pass, $row['password'])) {
        $_SESSION['loggedInUser'] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'lastName' => $row['lastname'],
            'email' => $row['email'],
        ];
        header('location: page.php');
        exit;
    } else {
        echo '<script>alert("Sxal tvyalner")</script>';
        header('location: login.php');
    }
} else {
    echo '<script>alert("Tvyal anunov mard goyutyun chuni")</script>';
    header('location: login.php');
}
mysqli_close($connect)
?>