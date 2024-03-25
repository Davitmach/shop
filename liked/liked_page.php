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
    <link rel="stylesheet" href="./liked_page.css">
</head>
<?php
$sql = mysqli_query($connect, "SELECT * FROM `liked` WHERE 1");
?>

<body>
    <?php
    include('../header/header.php');
    ?>
    <div class="Liked_box">
        <table>
            
            <?php
            if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_assoc($sql)) { ?>
                    <tr>
                        <form action="../cart/cart.php?idLike=<?php echo $row['id']?>" method="post">
                        <input type="hidden" value="1" name="Counter">
                        <td><a href="./delete.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-xmark"></i></a></td>
                        <td><img src="../upload_product/<?php echo $row['img'] ?>" alt=""></td>
                        <td><span><?php echo $row['name'] ?></span></td>
                        <td><h1>$<?php echo $row['price'] ?></h1></td>
                      
                        <td><button type="submit">ADD TO CART</button></td>
                        </form>
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
    <script src="./liked_page.js"></script>
</body>

</html> 