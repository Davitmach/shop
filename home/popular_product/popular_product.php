<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = mysqli_query($connect, "SELECT * FROM `popular_product` WHERE 1");
    ?>
    <div id="Popular_product_container">
        <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
            <div class="Popular_product_box">
                <div id="Background" style="background:url('../upload_product/<?php echo $row['img'] ?>') ;
                background-size: contain;
                background-repeat:no-repeat;
                ">
                    <div>
                        <h1><?php echo $row['small_name'] ?></h1>
                    </div>
                    <div>

                        <a href="../../../../php/final/product_page/product_page.php?id=<?php echo $row['id']; ?>">SHOP NOW</a>

                        </form>
                    </div>
                </div>

            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>