<?php

include('../mysql/mysql.php');
$name = $_POST['Name'];
$img = $_FILES['Img'];
$price = $_POST['Price'];
$akcia = $_POST['Akcia'];
$description = $_POST['Description'];
$small_name = $_POST['Small_name'];
$type = $_POST['Type'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_dir = '../upload_product/';
    $file = $file_dir . basename($img['name']);
$upFile = basename($img['name']);

    $sql = "INSERT INTO `popular_product`(`id`, `name`, `small_name`, `price`, `akcia`, `description`, `img`, `type`) VALUES (NULL,'$name','$small_name','$price','$akcia','$description','$upFile','$type')";
    if (move_uploaded_file($img['tmp_name'], $file)) {
        if (mysqli_query($connect, $sql)) {
            echo "<script>alert('Uploaded')</script>";
            header('location: admin.php');
        }
    }
}
