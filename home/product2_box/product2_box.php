<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql1 = mysqli_query($connect, "SELECT * FROM `product` WHERE 1");
    $sql2 = mysqli_query($connect, "SELECT * FROM `product` WHERE 1");
    $sql3 = mysqli_query($connect, "SELECT * FROM `product` WHERE 1");
    ?>
    <div id="Product2_container">
        <div class="Title_box">
            <h1>Featured products</h1>
        </div>
        <div class="Column_container">
            <div class="Column1_box">
                <?php
                while ($col1 = mysqli_fetch_assoc($sql1)) {
                    if ($col1['id'] > 10 && $col1['id'] < 19) { ?>
                        <div class="Product_box">
                            <?php
                            if ($col1['Akcia']) { ?>
                                <div class="Akcia_box"><span>-<?php echo round(($col1['price'] - $col1['Akcia']) / $col1['price'] * 100) ?>%</span></div>
                            <?php
                            }
                            ?>

                            <form method="post" action="../../../../php/final/liked/liked.php?Productid=<?php echo $col1['id'] ?>">
                                <button id="Liked" type="submit"><i class="fa-regular fa-heart"></i></button>
                            </form>
                            <form action="../../../../php/final/cart/cart.php?idProduct=<?php echo $col1['id'] ?>" method="post">
                                <input type="hidden" value="1" name="Counter">
                                <div class="Translating_box">
                                    <div class="Img_box">
                                        <a href="../../../../php/final/product_page/product_page.php?productId=<?php echo $col1['id'] ?>"><img src="../../../../php/final/upload_product/<?php echo $col1['img'] ?>" alt=""></a>
                                    </div>
                                    <div class="Info_box">
                                        <div>
                                            <p><?php echo $col1['name']; ?></p>
                                        </div>
                                        <div class="Price_box">
                                            <?php
                                            if (mb_strlen($col1['Akcia']) > 0) { ?>
                                                <div class="Price_before"><span>$<?php echo $col1['price'] ?></span></div>
                                                <div class="Akcia"><span>$<?php echo $col1['Akcia'] ?></span></div>

                                            <?php  } else { ?>
                                                <div class="Price"><span>$<?php echo $col1['price'] ?></span></div>
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


                <?php }
                }
                ?>
            </div>
            <div class="Column2_box">
                <?php
                while ($col2 = mysqli_fetch_assoc($sql2)) {
                    if ($col2['id'] == 16) { ?>
                        <div class="Product_box">
                            <?php
                            if ($col2['Akcia']) { ?>
                                <div class="Akcia_box"><span>-<?php echo round(($col2['price'] - $col2['Akcia']) / $col2['price'] * 100) ?>%</span></div>
                            <?php
                            }
                            ?>

                            <form method="post" action="../../../../php/final/liked/liked.php?Productid=<?php echo $col2['id'] ?>">
                                <button id="Liked" type="submit"><i class="fa-regular fa-heart"></i></button>
                            </form>
                            <form action="../../../../php/final/cart/cart.php?idProduct=<?php echo $col2['id'] ?>" method="post">
                                <input type="hidden" value="1" name="Counter">
                                <div class="Translating_box">
                                    <div class="Img_box">
                                        <a href="../../../../php/final/product_page/product_page.php?productId=<?php echo $col2['id'] ?>"><img src="../../../../php/final/upload_product/<?php echo $col2['img'] ?>" alt=""></a>
                                    </div>
                                    <div class="Info_box">
                                        <div>
                                            <p><?php echo $col2['name']; ?></p>
                                        </div>
                                        <div class="Price_box">
                                            <?php
                                            if (mb_strlen($col2['Akcia']) > 0) { ?>
                                                <div class="Price_before"><span>$<?php echo $col2['price'] ?></span></div>
                                                <div class="Akcia"><span>$<?php echo $col2['Akcia'] ?></span></div>

                                            <?php  } else { ?>
                                                <div class="Price"><span>$<?php echo $col2['price'] ?></span></div>
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


                <?php }
                }
                ?>
            </div>
            <div class="Column3_box">
                <?php
                while ($col3 = mysqli_fetch_assoc($sql3)) {
                    if ($col3['id'] > 16 && $col3['id'] < 21) { ?>
                        <div class="Product_box">
                            <?php
                            if ($col3['Akcia']) { ?>
                                <div class="Akcia_box"><span>-<?php echo round(($col3['price'] - $col3['Akcia']) / $col3['price'] * 100) ?>%</span></div>
                            <?php
                            }
                            ?>

                            <form method="post" action="../../../../php/final/liked/liked.php?Productid=<?php echo $col3['id'] ?>">
                                <button id="Liked" type="submit"><i class="fa-regular fa-heart"></i></button>
                            </form>
                            <form action="../../../../php/final/cart/cart.php?idProduct=<?php echo $col3['id'] ?>" method="post">
                                <input type="hidden" value="1" name="Counter">
                                <div class="Translating_box">
                                    <div class="Img_box">
                                        <a href="../../../../php/final/product_page/product_page.php?productId=<?php echo $col3['id'] ?>"><img src="../../../../php/final/upload_product/<?php echo $col3['img'] ?>" alt=""></a>
                                    </div>
                                    <div class="Info_box">
                                        <div>
                                            <p><?php echo $col3['name']; ?></p>
                                        </div>
                                        <div class="Price_box">
                                            <?php
                                            if (mb_strlen($col3['Akcia']) > 0) { ?>
                                                <div class="Price_before"><span>$<?php echo $col3['price'] ?></span></div>
                                                <div class="Akcia"><span>$<?php echo $col3['Akcia'] ?></span></div>

                                            <?php  } else { ?>
                                                <div class="Price"><span>$<?php echo $col3['price'] ?></span></div>
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


                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>