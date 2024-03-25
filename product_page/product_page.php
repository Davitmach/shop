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
    <link rel="stylesheet" href="./product_page.css">
</head>

<body>
    <?php
    include('../header/header.php');

    ?>

    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = mysqli_query($connect, "SELECT * FROM `popular_product` WHERE `id` = $id");
        $row = mysqli_fetch_assoc($sql);
    } else if (isset($_GET['productId'])) {
        $id = $_GET['productId'];
        $sql = mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = $id");
        $row = mysqli_fetch_assoc($sql);
    }




    ?>

    <div id="Product_container">
        <div class="Img_box">
            <div class="Img"><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
            <div class="Mini_img">
                <div><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
                <div><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
                <div><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
                <div><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
                <div><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
            </div>
        </div>
        <div class="Info_box">
            <?php if (isset($_GET['id'])) { ?>
                <form action="../cart/cart.php?id=<?php echo $row['id'] ?>" method="post">

                    <div>
                        <h1><?php echo $row['name'] ?></h1>
                    </div>
                    <div class="Price">
                        <?php
                        if (isset($_GET['productId'])) {
                            if ($row['Akcia']) {
                        ?>
                                <div class="Akcia"><span>$<?php echo $row['Akcia'] ?></span></div>
                                <div class="Price_before"><span>$<?php echo $row['price'] ?></span></div>
                            <?php  } else { ?>
                                <div class="Price_box"><span>$<?php echo $row['price'] ?></span></div>
                            <?php
                            }
                        } else { ?>
                            <div class="Price_box"><span>$<?php echo $row['price'] ?></span></div>
                        <?php
                        }
                        ?>
                    </div>
                    <div>
                        <p><?php echo $row['description'] ?></p>
                    </div>

                    <div class="Add_to_card">
                        <div><input id="Counter" name="Counter" type="text"></div>
                        <div id="Plus_minus">
                            <div><i id="Plus" class="fa-solid fa-plus"></i></div>
                            <div><i id="Minus" class="fa-solid fa-minus"></i></div>
                        </div>
                        <div><button id='Add_to_cart' type="submit" id="Add_to_cart">ADD TO CART</button></div>
                    </div>
                    <div>
                </form>
            <?php
            } else if (isset($_GET['productId'])) { ?>
                <form action="../cart/cart.php?productId=<?php echo $row['id'] ?>" method="post">

                    <div>
                        <h1><?php echo $row['name'] ?></h1>
                    </div>
                    <div class="Price">
                        <?php
                        if (isset($_GET['productId'])) {
                            if ($row['Akcia']) {
                        ?>
                                <div class="Akcia"><span>$<?php echo $row['Akcia'] ?></span></div>
                                <div class="Price_before"><span>$<?php echo $row['price'] ?></span></div>
                            <?php  } else { ?>
                                <div class="Price_box"><span>$<?php echo $row['price'] ?></span></div>
                            <?php
                            }
                        } else { ?>
                            <div class="Price_box"><span>$<?php echo $row['price'] ?></span></div>
                        <?php
                        }
                        ?>
                    </div>
                    <div>
                        <p><?php echo $row['description'] ?></p>
                    </div>

                    <div class="Add_to_card">
                        <div><input id="Counter" name="Counter" type="text"></div>
                        <div id="Plus_minus">
                            <div><i id="Plus" class="fa-solid fa-plus"></i></div>
                            <div><i id="Minus" class="fa-solid fa-minus"></i></div>
                        </div>
                        <div><button id='Add_to_cart' type="submit" id="Add_to_cart">ADD TO CART</button></div>
                    </div>
                    <div>
                </form>
            <?php
            }
            ?>
            <form action="../liked/liked.php?id=<?php echo $row['id'] ?>" method="post">
                <button id="Add_to_liked" type="submit"><i class="fa-regular fa-heart"></i></button>
            </form>
        </div>
        <div><span>Category: <?php echo $row['type'] ?></span></div>

    </div>
    </div>







    <?php
    include('../footer/footer.php');
    include('../scroll_up/scroll.php');
    ?>
    <script src="./product_page.js"></script>
</body>

</html>