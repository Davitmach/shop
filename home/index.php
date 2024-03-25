<?php
include('../mysql/mysql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./slider/slider.css">
    <link rel="stylesheet" href="./popular_product/popular_product.css">
    <link rel="stylesheet" href="./product1_box/product1_box.css">
    <link rel="stylesheet" href="./product2_box/product2_box.css">
    <link rel="stylesheet" href="./slider2/slider2.css">
    <link rel="stylesheet" href="./most_popular/most_popular.css">

</head>

<body>
    <?php
    include('../header/header.php');
    include('./slider/slider.php');
    include('./popular_product/popular_product.php');
    include('./product1_box/product1_box.php');
    include('./slider2/slider2.php');
    include('./product2_box/product2_box.php');
    include('./most_popular/most_popular.php');
    include('../footer/footer.php');
    include('../scroll_up/scroll.php');
    ?>


    <script src="./script.js"></script>
    <script src="./slider/slider.js"></script>
    <script src="./popular_product/popular_product.js"></script>
    <script src="./product1_box/product1_box.js"></script>
    <script src="./slider2/slider2.js"></script>
    <script src="./product2_box/product2_box.js"></script>
</body>

</html>