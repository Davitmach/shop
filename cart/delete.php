<?php
include('../mysql/mysql.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($connect, "DELETE FROM `add_to_cart` WHERE `id` = '$id'");
    if($sql) {
        header('location: cart_page.php');
    }
}
