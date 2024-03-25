<?php
include('../mysql/mysql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./blog_page.css">
</head>

<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = mysqli_query($connect, "SELECT * FROM `blog` WHERE `id` = '$id'");
            $sqlAll = mysqli_query($connect, "SELECT * FROM `blog` WHERE 1");
        }
    }
    ?>
    <?php
    include('../header/header.php');
    ?>
     <div class="Main">
       

       <div class="Post_container" id="Posts">
           <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
               <div class="Blog_box">
                   <div class="Img_box"><img src="<?php echo $row['img'] ?>" alt=""></div>
                   <div class="Info_box">
                       <div class="Date"><span><?php echo $row['date'] ?></span></div>
                       <div class="Title">
                           <h1><?php echo $row['title'] ?></h1>
                       </div>
                       <div class="Description">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue ligula, feugiat ut nulla case elitr. Est lacus, molestie in no, icula mea ipsum. Nunc faucibus, nisl id dapibus finibus, enim diam interdum nulla, sed laoreet risus lectus. Vivamus viverra tem pus. Proin inan tincidunt sem....</p>
                       </div>
                       
                       <div class="Qoute_box">
                           <div><i class="fa-solid fa-quote-left"></i></div>
                           <div>
                               <p>Cu quodsi electram mediocrem cum, vis at utinam erpuit. In feri docend mea.</p>
                           </div>
                       </div>
                   </div>
               </div>
           <?php
           } ?>
           
       </div>
      
       <div class="Right_bar">
           
           <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
               <div class="Product_box">
                   <div class="Background_box">
                   </div>
                   <div class="Info_box">
                       <div>
                           <h1>Air Purifiers for Home</h1>
                       </div>
                       <div>
                           <form action="../product_page/product_page.php?productId=<?php echo $row['id'] ?>" method="post">
                               <button type="submit">SHOP NOW</button>
                           </form>
                       </div>
                   </div>
               </div>
           <?php
           } ?>
           <div class="Posts_container">
               <div>
                   <h1>Related posts</h1>
               </div>
               <div class="Posts">
                   <?php
                   while ($row = mysqli_fetch_assoc($sqlAll)) { ?>
                       <div class="Post_box">
                           <div class="Img_box"><form method="post" action="./blog_page.php?id=<?php echo $row['id']?>"><button type="submit"><img src="<?php echo $row['img'] ?>" alt=""></button></form></div>
                           <div class="Info_box">
                               <div><span><?php echo $row['date'] ?></span></div>
                               <div>
                                   <h1><?php echo $row['title'] ?></h1>
                               </div>
                           </div>
                       </div>
                   <?php
                   }
                   ?>
               </div>
           </div>


       </div>
   </div>
    <?php
    include('../footer/footer.php');
    include('../scroll_up/scroll.php');
    ?>
</body>

</html>