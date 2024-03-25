<?php
include('../mysql/mysql.php');
$id = $_GET['id'];
$deleteUser = "DELETE FROM `users` WHERE `id` = '$id'";
if(mysqli_query($connect,$deleteUser)) {
    echo '<script>alert("deleted")</script>';    
    header('location: admin.php');  
}
$deleteProduct = "DELETE FROM `product` WHERE `id` = '$id'";
if(mysqli_query($connect,$deleteProduct)) {
    echo '<script>alert("deleted")</script>';    
    header('location: admin.php');  
}
$deleteProduct = "DELETE FROM `blog` WHERE `id` = '$id'";
if(mysqli_query($connect,$deleteProduct)) {
    echo '<script>alert("deleted")</script>';    
    header('location: admin.php');  
}
$deleteProduct = "DELETE FROM `popular_product` WHERE `id` = '$id'";
if(mysqli_query($connect,$deleteProduct)) {
    echo '<script>alert("deleted")</script>';    
    header('location: admin.php');  
}
$deleteProduct = "DELETE FROM `most_popular` WHERE `id` = '$id'";
if(mysqli_query($connect,$deleteProduct)) {
    echo '<script>alert("deleted")</script>';    
    header('location: admin.php');  
}
?>