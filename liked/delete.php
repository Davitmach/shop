<?php
include('../mysql/mysql.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($connect, "DELETE FROM `liked` WHERE `id` = '$id'");
    if ($sql) {
        header('location: liked_page.php');
    }
}
