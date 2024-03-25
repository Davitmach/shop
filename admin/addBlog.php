<?php

include('../mysql/mysql.php');
$title = $_POST['Title'];
$date = $_POST['Date'];
$img = $_FILES['Img'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_dir = '../upload_blog/';
    $file = $file_dir . basename($img['name']);


    $sql = "INSERT INTO `blog`(`id`, `date`, `title`, `img`) VALUES (NULL,'$date','$title','$file')";
    if (move_uploaded_file($img['tmp_name'], $file)) {
        if (mysqli_query($connect, $sql)) {
            echo "<script>alert('Uploaded')</script>";
            header('location: admin.php');
        }
    }
}
