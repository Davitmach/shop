<?php
include('../mysql/mysql.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $add_to_cart = mysqli_query($connect, "SELECT * FROM `popular_product` WHERE `id` = '$id'");
        if ($add_to_cart) {
            $add_to_cart = mysqli_fetch_assoc($add_to_cart);
            $name =  $add_to_cart['name'];
            $img =  $add_to_cart['img'];
            $price =  $add_to_cart['price'];
            $counter = $_POST['Counter'];
        }
       


        $sql = mysqli_query($connect, "INSERT INTO `add_to_cart`(`id`, `counter`, `price`, `name`, `img`) VALUES (NULL,'$counter','$price',' $name','$img')");
        if ($sql) {
            header('location: ../home/index.php');
        } else {
            echo "<script>alert('Error!')</script>";
            header('location: ../home/index.php');
        }
    } else if (isset($_GET['idLike'])) {

        $id = $_GET['idLike'];
        $add_to_cart = mysqli_query($connect, "SELECT * FROM `liked` WHERE `id` = '$id'");
        $add_to_cart = mysqli_fetch_assoc($add_to_cart);
        $name =  $add_to_cart['name'];
        $img =  $add_to_cart['img'];
        $price =  $add_to_cart['price'];
        $counter = $_POST['Counter'];

        $sql = mysqli_query($connect, "INSERT INTO `add_to_cart`(`id`, `counter`, `price`, `name`, `img`) VALUES (NULL,'$counter','$price',' $name','$img')");


        if ($sql) {
            header('location: ../home/index.php');
        } else {
            echo "<script>alert('Error!')</script>";
            header('location: ../home/index.php');
        }
    } else if (isset($_GET['idProduct'])) {

        $id = $_GET['idProduct'];
        $add_to_cart = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = '$id'");
        $add_to_cart = mysqli_fetch_assoc($add_to_cart);
        $name =  $add_to_cart['name'];
        $img =  $add_to_cart['img'];
        $price =  $add_to_cart['price'];
        $counter = $_POST['Counter'];

        $sql = mysqli_query($connect, "INSERT INTO `add_to_cart`(`id`, `counter`, `price`, `name`, `img`) VALUES (NULL,'$counter','$price',' $name','$img')");


        if ($sql) {
            header('location: ../home/index.php');
        } else {
            echo "<script>alert('Error!')</script>";
            header('location: ../home/index.php');
        }
    }else if(isset($_GET['productId'])) {
        $id = $_GET['productId'];
        $add_to_cart = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = '$id'");
        $add_to_cart = mysqli_fetch_assoc($add_to_cart);
        $name =  $add_to_cart['name'];
        $img =  $add_to_cart['img'];
        $price =  $add_to_cart['price'];
        $counter = $_POST['Counter'];

        $sql = mysqli_query($connect, "INSERT INTO `add_to_cart`(`id`, `counter`, `price`, `name`, `img`) VALUES (NULL,'$counter','$price',' $name','$img')");


        if ($sql) {
            header('location: ../home/index.php');
        } else {
            echo "<script>alert('Error!')</script>";
            header('location: ../home/index.php');
        } 
    } 
    
    else {
        echo "<script>alert('Error!')</script>";
        header('location: ../home/index.php');
    }
} else {
    echo "<script>alert('Error!')</script>";
    header('location: ../home/index.php');
}
