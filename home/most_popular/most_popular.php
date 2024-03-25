<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql1 = mysqli_query($connect, "SELECT * FROM `most_popular` WHERE `name` = 'Camera CCQ-55889 4k Waterproof Cover'");
    $sql2 = mysqli_query($connect, "SELECT * FROM `most_popular` WHERE `name` = 'BX-2357 Closed-Back Wireless Headphones'");
    $row1 = mysqli_fetch_assoc($sql1);
    $row2 = mysqli_fetch_assoc($sql2);
    ?>
    <div class="Most_popular_container">
        <div class="Most_popular_box">
            <div class="Background_box" style="background:url('../upload_product/<?php echo $row1['img'] ?>') ;
                background-size: contain;
                background-repeat:no-repeat;
                ">
                <div class="Info_box">
                    <div class="Title1_box"><span>MF841HN/A 13"</span></div>
                    <div class="Title2_box">
                        <h1><?php echo $row1['small_name'] ?></h1>
                    </div>
                    <div class="Akcia_description"><span><?php echo $row1['akcia_description'] ?></span></div>
                    <div class="Akcia_box"><h1><?php echo $row1['akcia']?>%</h1></div>
                </div>
            </div>
        </div>
        <div class="Most_popular_box">
            <div class="Background_box" style="background:url('../upload_product/<?php echo $row2['img'] ?>') ;
                background-size: contain;
                background-repeat:no-repeat;
                ">
                <div class="Info_box">
                    
                    <div class="Title1_box"><span>with Bluetooth 5.1</span></div>
                    <div class="Title2_box"><h1><?php echo $row2['small_name'] ?></h1></div>
                    <div class="Akcia_description"><span><?php echo $row2['akcia_description'] ?></span></div>
                    <div class="Price_box"><h1>$<?php echo $row2['price']?></h1></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>