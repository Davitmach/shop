<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $GetProducts = mysqli_query($connect, "SELECT * FROM `product` WHERE 1");

    ?>

    <div id="Product1_container">
        <div class="Title_box">
            <h1>Featured products</h1>
        </div>
        <div id="Product1_box">
            <?php

            while ($row = mysqli_fetch_assoc($GetProducts)) {
                if ($row['id'] < 10) {
            ?>
                    <div class="Product">
                        <?php
                        if ($row['Akcia']) { ?>
                            <div class="Akcia_box"><span>-<?php echo round(($row['price'] - $row['Akcia']) / $row['price'] * 100) ?>%</span></div>
                        <?php
                        }
                        ?>

                        <form method="post" action="../../../../php/final/liked/liked.php?Productid=<?php echo $row['id'] ?>">
                            <button id="Liked" type="submit"><i class="fa-regular fa-heart"></i></button>
                        </form>
                        <form action="../../../../php/final/cart/cart.php?idProduct=<?php echo $row['id'] ?>" method="post">
                            <input type="hidden" value="1" name="Counter">
                            <div class="Translating_box">
                                <div class="Img_box">
                                    <a href="../../../../php/final/product_page/product_page.php?productId=<?php echo $row['id'] ?>"><img src="../../../../php/final/upload_product/<?php echo $row['img'] ?>" alt=""></a>
                                </div>
                                <div class="Info_box">
                                    <div>
                                        <p><?php echo $row['name']; ?></p>
                                    </div>
                                    <div class="Price_box">
                                        <?php
                                        if (mb_strlen($row['Akcia']) > 0) { ?>
                                          <div class="Price_before"><span>$<?php echo $row['price'] ?></span></div>
                                            <div class="Akcia"><span>$<?php echo $row['Akcia'] ?></span></div>
                                          
                                        <?php  } else { ?>
                                            <div class="Price"><span>$<?php echo $row['price'] ?></span></div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="Cart_box">
                                <button type="submit">ADD TO CART</button>
                            </div>
                        </form>
                    </div>
            <?php
                }
            }

            ?>
        </div>
    </div>
</body>

</html>