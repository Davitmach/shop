<?php
include('../mysql/mysql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./blog.css">
</head>

<body>
    <?php
    include('../header/header.php');
    ?>
    <?php $sqlProduct = mysqli_query($connect, "SELECT * FROM `product` WHERE `name` = 'Air Purifier Mika Clean Pro-559'");
    $sqlPosts = mysqli_query($connect, "SELECT * FROM `blog` WHERE 1");




    $itemsPerPage = 3;

    // Fetch the total number of rows
    $totalRows = mysqli_query($connect, "SELECT COUNT(*) AS total FROM `blog`");
    $totalRows = mysqli_fetch_assoc($totalRows)['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalRows / $itemsPerPage);

    // Current page number
    $pageNumber = isset($_GET['page-nr']) ? (int)$_GET['page-nr'] : 1;

    // Calculate the start index for the current page
    $start = ($pageNumber - 1) * $itemsPerPage;

    // Fetch products for the current page
    $sqlBlog = mysqli_query($connect, "SELECT * FROM `blog` LIMIT $start, $itemsPerPage");



    ?>
    <div class="Main">
       

        <div class="Post_container" id="Posts">
            <?php while ($row = mysqli_fetch_assoc($sqlBlog)) { ?>
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
                        <div class="Blog_page">
                            <form action="../blog_page/blog_page.php?id=<?php echo $row['id']?>" method="post">
                                <button type="submit">READ MORE</button>
                            </form>
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
              <div id="Pagination_box">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <a href="?page-nr=<?php echo $i ?>"><?php echo $i ?></a>
            <?php } ?>
        </div>
        </div>
        <div class="Right_bar">
            <div class="Input_box">
                <input id="search" placeholder="Type your text">
                <button type="submit" onclick="search()"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <?php while ($row = mysqli_fetch_assoc($sqlProduct)) { ?>
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
                    while ($row = mysqli_fetch_assoc($sqlPosts)) { ?>
                        <div class="Post_box">
                            <div class="Img_box"><form action="../blog_page/blog_page.php?id=<?php echo $row['id']?>" method="post"><button style="border:none;background:none;" type="submit"><img src="<?php echo $row['img'] ?>" alt=""></button></form></div>
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
    <script src="./blog.js"></script>
</body>

</html>