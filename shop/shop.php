<?php
include('../mysql/mysql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./shop.css">
</head>

<body>
    <?php





    $itemsPerPage = 5;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `product`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Current page number
    $pageNumber = isset($_GET['page-nr']) ? (int)$_GET['page-nr'] : 1;

    // Calculate the start index for the current page
    $start = ($pageNumber - 1) * $itemsPerPage;

    // Fetch products for the current page
    $sql = mysqli_query($connect, "SELECT * FROM `product` LIMIT $start, $itemsPerPage");
    ?>
    <?php
    include('../header/header.php');
    ?>





    <div id="Main_container">
        <div class="Bar_container">
            <div id="Price_range">
                <div class="container">
                    <div class="slider-container">
                        <div class="track">
                            <div class="progress"></div>
                        </div>
                        <div class="thumb-1">
                            <div class="thumb-indicator-1"></div>
                        </div>
                        <div class="thumb-2">
                            <div class="thumb-indicator-2"></div>
                        </div>
                    </div>
                    <div class="slider-values">
                        <form action="" method="post">
                            <input name="min" type="text" class="value-1" readonly>-
                            <input name="max" type="text" class="value-2" readonly>
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div id="Product_page">
            <div>
                <h1>Electronics & Appliances</h1>
            </div>
            <div class="Products">
                <?php if (isset($_POST['max'], $_POST['min'])) {
                    while ($row = mysqli_fetch_assoc($sql)) {
                        if ($row['price'] >= $_POST['min'] && $row['price'] <= $_POST['max']) { ?>
                            <div id="Product_box">
                                <div class="Cart_box">
                                    <form action="../cart/cart.php?idProduct=<?php echo $row['id'] ?>" method="post">
                                        <input type="hidden" name="Counter" value="1">
                                        <button type="submit">ADD TO CART</button>
                                    </form>
                                </div>
                                <div class="Img_box"><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
                                <div class="Info_box">
                                    <div class="Name_box">
                                        <form action="../product_page/product_page.php?productId=<?php echo $row['id'] ?>" method="post"><button type="submit"><?php if (mb_strlen($row['name']) > 15) {
                                                                                                                                                                    echo substr($row['name'], 0, 15) . '...';
                                                                                                                                                                } else {
                                                                                                                                                                    echo $row['name'];
                                                                                                                                                                } ?></button></form>
                                    </div>
                                    <div class="Price_box"><span>$<?php echo $row['price'] ?></span></div>
                                </div>
                            </div>

                        <?php
                        }
                    }
                } else {
                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <div id="Product_box">
                            <div class="Cart_box">
                                <form action="../cart/cart.php?idProduct=<?php echo $row['id'] ?>" method="post">
                                    <input type="hidden" name="Counter" value="1">
                                    <button type="submit">ADD TO CART</button>
                                </form>
                            </div>
                            <div class="Img_box"><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></div>
                            <div class="Info_box">
                                <div class="Name_box">
                                    <form action="../product_page/product_page.php?productId=<?php echo $row['id'] ?>" method="post"><button type="submit"><?php if (mb_strlen($row['name']) > 15) {
                                                                                                                                                                echo substr($row['name'], 0, 15) . '...';
                                                                                                                                                            } else {
                                                                                                                                                                echo $row['name'];
                                                                                                                                                            } ?></button></form>
                                </div>
                                <div class="Price_box"><span>$<?php echo $row['price'] ?></span></div>
                            </div>
                        </div>

                <?php }
                }
                ?>

            </div>
        </div>
        <div id="Pagination_box">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <a href="?page-nr=<?php echo $i ?>"><?php echo $i ?></a>
            <?php } ?>
        </div>
    </div>


    <?php
    include('../footer/footer.php');
    include('../scroll_up/scroll.php');
    ?>

    <script src="./shop.js"></script>


</body>




</html>