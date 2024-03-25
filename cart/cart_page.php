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
    <link rel="stylesheet" href="./cart_page.css">
</head>
<?php
$sql = mysqli_query($connect, "SELECT * FROM `add_to_cart` WHERE 1");
?>

<body>
    <?php
    include('../header/header.php');
    ?>
    <div class="Product_box">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <h1>Product</h1>
                </td>
                <td>
                    <h1>Price</h1>
                </td>
               
                <td><h1>Counter</h1></td>
                <td>
                    <h1>Subtotal</h1>
                </td>
            </tr>
            <?php
            if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_assoc($sql)) { ?>
                    <tr>
                        <td><a href="./delete.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-xmark"></i></a></td>
                        <td><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></td>
                        <td><span><?php echo $row['name'] ?></span></td>
                        <td><span>$<?php echo $row['price'] ?></span></td>
                      
                        <td><span><?php echo $row['counter']?></span></td>
                        <td><span>$<?php echo $row['counter'] ? $row['price'] * $row['counter'] : $row['price']   ?></span></td>
                    </tr>
                <?php
                }
            } else { ?>
                <div class="Empty_product">
                    <div>
                        <h1>Your cart is currently empty.</h1>
                    </div>
                    <div><a href="">RETURN TO SHOP</a></div>
                </div>
            <?php
            }
            ?>
        </table>
    </div>

    <?php
    include('../footer/footer.php');
    include('../scroll_up/scroll.php');
    ?>
    <script src="./cart_page.js"></script>
</body>

</html>