    <?php

    include('../mysql/mysql.php');

    $Users = mysqli_query($connect, "SELECT * FROM `users`");
    $Products = mysqli_query($connect, "SELECT * FROM `product`");
    $Blogs = mysqli_query($connect, "SELECT * FROM `blog`");
    $Popular_products = mysqli_query($connect, "SELECT * FROM `popular_product`");
    $Liked = mysqli_query($connect, "SELECT * FROM `liked`");
    $Cart = mysqli_query($connect, "SELECT * FROM `add_to_cart`");
    $Most_popular = mysqli_query($connect, "SELECT * FROM `most_popular` WHERE 1");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../admin/admin.css">
    </head>

    <body>
        <?php
        include('../header/header.php');
        ?>
        <div class="Main">
            <div class="Bar_box">
                <ul>
                    <li><a id="Users_toggle" href="#">Users</a></li>
                    <li><a id="Products_toggle" href="#">Products</a></li>
                    <li><a id="Popular_Products_toggle" href="#">Popular Products</a></li>
                    <li><a id="Main_Popular_Products_toggle" href="#">Main Popular Products</a></li>
                    <li><a id="Liked_toggle" href="#">Liked</a></li>
                    <li><a id="Add_to_card_toggle" href="#">Add to card</a></li>
                    <li><a id="Blog_toggle" href="#">Blog</a></li>
                    <li><a id="Message_toggle" href="#">Message</a></li>
                </ul>
            </div>
            <div class="Main_box">
                <div id="Users" class="Users_container">

                    <ul>
                        <h1>USERS</h1>
                        <?php
                        while ($row = mysqli_fetch_assoc($Users)) {
                        ?>
                            <li>
                                <div><img src='<?php echo $row['img']; ?>'></div>
                                <div>
                                    <h1><?php echo $row['name']; ?></h1>
                                </div>
                                <div>
                                    <h2><?php echo $row['lastname']; ?></h2>
                                </div>
                                <div><span><?php echo $row['email']; ?></span></div>
                                <div>
                                    <form action="" method="post"><a href='../admin/delete.php?id=<?php echo $row['id']; ?>'>Delete</a></form>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div id="Products_box" class="Product_container">
                    <h1>PRODUCT </h1>
                    <form action="../admin/addProduct.php" method="post" enctype="multipart/form-data">
                        <input name="Name" type="text" placeholder="Name">
                        <input name="Small_name" type="text" placeholder="Small_name">
                        <input name="Img" type="file">
                        <input name="Price" type="text" placeholder="Price">
                        <input name="Akcia" type="text" placeholder="Akcia">
                        <input name="Description" type="text" placeholder="Description">
                        <input name="Type" type="text" placeholder="Type">
                        <button type="submit">Add</button>
                    </form>
                    <div id="Products" class="Products">
                        <ul>
                            <?php
                            while ($row = mysqli_fetch_assoc($Products)) {
                            ?>
                                <li>
                                    <div><img src='../upload_product/<?php echo $row['img']; ?>' alt=""></div>
                                    <div>
                                        <h1><?php echo $row['name']; ?></h1>
                                    </div>
                                    <div><span><?php echo $row['small_name']; ?></span></div>
                                    <div>
                                        <h2><?php echo $row['price']; ?></h2>
                                    </div>
                                    <div><span><?php echo $row['Akcia']; ?></span></div>
                                    <div>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div><span><?php echo $row['type']; ?></span></div>

                                    <div>
                                        <form action="" method="post">
                                            <a href='../admin/delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
                                            <a href="../admin/edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        </form>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div id="Message_container">
                    <h1>USERS</h1>
                    <table>


                        <?php
                        $sql = mysqli_query($connect, "SELECT * FROM `contact`");
                        while ($row3 = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $row3['name']; ?></td>
                                <td><?php echo $row3['message']; ?></td>
                                <td><?php echo $row3['email']; ?></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div id="Blog_container">
                    <form action="../admin/addBlog.php" method="post" enctype="multipart/form-data">
                        <h1>BLOG</h1>
                        <input name="Date" type="text" placeholder="Date">
                        <input name="Title" type="text" placeholder="Title">
                        <input name="Img" type="file">
                        <button type="submit">Publication</button>
                    </form>
                    <div id="Blog_box">
                        <ul>
                            <?php
                            while ($row4 = mysqli_fetch_assoc($Blogs)) {
                            ?>
                                <li>
                                    <div><img src='../upload_blog/<?php echo $row4['img']; ?>' alt=""></div>
                                    <div>
                                        <h1><?php echo $row4['title']; ?></h1>
                                    </div>
                                    <div>
                                        <h2><?php echo $row4['date']; ?></h2>
                                    </div>

                            
                                    <div>
                                        <form action="" method="post">
                                            <a href='../admin/delete.php?id=<?php echo $row4['id']; ?>'>Delete</a>
                                            <a href="../admin/edit_blog.php?id=<?php echo $row4['id']; ?>">Edit</a>
                                        </form>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div id="Popular_product_box">
                    <form action="../admin/addPopularProduct.php" method="post" enctype="multipart/form-data">
                        <h1>POPULAR PRODUCT</h1>
                        <input name="Name" type="text" placeholder="Name">
                        <input name="Small_name" type="text" placeholder="Small_name">
                        <input name="Img" type="file">
                        <input name="Price" type="text" placeholder="Price">
                        <input name="Akcia" type="text" placeholder="Akcia">
                        <input name="Description" type="text" placeholder="Description">
                        <input name="Type" type="text" placeholder="Type">
                        <button type="submit">Add</button>
                    </form>
                    <div id="Products" class="Products">
                        <ul>
                            <?php
                            while ($row = mysqli_fetch_assoc($Popular_products)) {
                            ?>
                                <li>
                                    <div><img src='../upload_product/<?php echo $row['img']; ?>' alt=""></div>
                                    <div>
                                        <h1><?php echo $row['name']; ?></h1>
                                    </div>
                                    <div><span><?php echo $row['small_name']; ?></span></div>
                                    <div>
                                        <h2><?php echo $row['price']; ?></h2>
                                    </div>
                                    <div><span><?php echo $row['akcia']; ?></span></div>
                                    <div>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div><span><?php echo $row['type']; ?></span></div>

                                    <div>
                                        <form action="" method="post">
                                            <a href='../admin/delete.php?id=<?php echo $row['id']; ?>'>Delete</a>

                                        </form>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div id="Liked_container">
                    <table>
                        <h1>LIKED</h1>
                        <tr>
                            <td>
                                <h1>IMG</h1>
                            </td>
                            <td>
                                <h1>NAME</h1>
                            </td>
                            <td>
                                <h1>PRICE</h1>
                            </td>
                        </tr>
                        <?php

                        while ($row4 = mysqli_fetch_assoc($Liked)) {
                        ?>
                            <tr>
                                <td><img src="../upload_product/<?php echo $row4['img'] ?>" alt=""></td>
                                <td>
                                    <h1><?php echo $row4['name'] ?></h1>
                                </td>
                                <td>
                                    <h1>$<?php echo $row4['price'] ?></h1>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div id="Cart_container">
                    <table>
                        <h1>CART</h1>
                        <tr>
                            <td>
                                <h1>IMG</h1>
                            </td>
                            <td>
                                <h1>NAME</h1>
                            </td>
                            <td>
                                <h1>PRICE</h1>
                            </td>
                        </tr>
                        <?php

                        while ($row4 = mysqli_fetch_assoc($Cart)) {
                        ?>
                            <tr>
                                <td><img src="<?php echo $row4['img'] ?>" alt=""></td>
                                <td>
                                    <h1><?php echo $row4['name'] ?></h1>
                                </td>
                                <td>
                                    <h1>$<?php echo $row4['price'] ?></h1>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div id="Most_popular_container">
                    <form action="../admin/addMostPopularProduct.php" method="post" enctype="multipart/form-data">
                        <h1>MOST POPULAR PRODUCT</h1>
                        <input name="Name" type="text" placeholder="Name">
                        <input name="Img" type="file">
                        <input name="Price" type="text" placeholder="Price">
                        <input name="Akcia" type="text" placeholder="Akcia">
                        <input name="Description" type="text" placeholder="Description">
                        <input name="Type" type="text" placeholder="Type">
                        <input type="text" name="Akcia_description" placeholder="Akcia description">
                        <input type="text" name="Small_name" placeholder="Small_name">
                        <button type="submit">Add</button>
                    </form>
                    <div id="Products" class="Products">
                        <ul>
                            <?php
                            while ($row = mysqli_fetch_assoc($Most_popular)) {
                            ?>
                                <li>
                                    <div><img src='../upload_product/<?php echo $row['img']; ?>' alt=""></div>
                                    <div>
                                        <h1><?php echo $row['name']; ?></h1>
                                    </div>
                                    <div><span><?php echo $row['akcia_description']; ?></span></div>
                                    <div>
                                        <h2><?php echo $row['price']; ?></h2>
                                    </div>
                                    <div><span><?php echo $row['akcia']; ?></span></div>
                                    <div>
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div><span><?php echo $row['type']; ?></span></div>

                                    <div>
                                        <form action="" method="post">
                                            <a href='../admin/delete.php?id=<?php echo $row['id']; ?>'>Delete</a>

                                        </form>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('../footer/footer.php');
        include('../scroll_up/scroll.php');


        ?>
        <script src="./admin.js"></script>
    </body>

    </html>