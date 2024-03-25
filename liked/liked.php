<?php
include('../mysql/mysql.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $popular_product = mysqli_query($connect, "SELECT * FROM `popular_product` WHERE `id` = '$id'");
        $popular_product = mysqli_fetch_assoc($popular_product);
        $name = $popular_product['name'];
        $img = $popular_product['img'];
        $price = $popular_product['price'];
        $sql = mysqli_query($connect, "INSERT INTO `liked`(`id`, `img`, `price`, `name`) VALUES (NULL,'$img','$price','$name')");
        if ($sql) {
            header('location: ../home/index.php');
        }
    } else if (isset($_GET['Productid'])) {
      
        $id = $_GET['Productid'];
        $product = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = '$id'");
        $product = mysqli_fetch_assoc($product);
        $name = $product['name'];
        $img = $product['img'];
        $price = $product['price'];
        $sql = mysqli_query($connect, "INSERT INTO `liked`(`id`, `img`, `price`, `name`) VALUES (NULL,'$img','$price','$name')");
        if ($sql) {
            header('location: ../home/index.php');
        }
        
    }
}
