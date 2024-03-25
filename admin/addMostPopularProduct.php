<?php

include('../mysql/mysql.php');
$name = $_POST['Name'];
$img = $_FILES['Img'];
$price = $_POST['Price'];
$akcia = $_POST['Akcia'];
$description = $_POST['Description'];
$akcia_description = $_POST['Akcia_description'];
$small_name = $_POST['Small_name'];
$type = $_POST['Type'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_dir = '../upload_product/';
    $file = $file_dir . basename($img['name']);
    $upFile = basename($img['name']);

    $sql = "INSERT INTO `most_popular`(`id`, `name`, `price`, `akcia`, `description`, `akcia_description`, `type`, `img`,`small_name`) VALUES (NULL,'$name','$price','$akcia','$description','$akcia_description','$type','$upFile','$small_name')";
    if (move_uploaded_file($img['tmp_name'], $file)) {
        if (mysqli_query($connect, $sql)) {
            echo "<script>alert('Uploaded')</script>";
            header('location: admin.php');
        }
    }
}
