<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./store_location.css">
</head>

<body>
    <?php
    include('../header/header.php');
    ?>
    <div class="Map_container">
        <div>
            <h1>Store Locator</h1>
        </div>
        <div class="Map_box"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2088.1881061214744!2d-0.12321990652902946!3d51.5079292922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTHCsDMwJzMwLjciTiAwwrAwNyczMi44Ilc!5e0!3m2!1sru!2sam!4v1710611563602!5m2!1sru!2sam" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <div class="Stores_container">
        <div>
            <div>
                <h1>Brixton Store</h1>
            </div>
            <div>
                <div><i class="fa-solid fa-tv"></i></div>
                <div><span>+000 123 456 789</span></div>
            </div>
            <div>
                <div><i class="fa-solid fa-gamepad"></i></div>
                <div><span>bridge@example.com</span></div>
            </div>
            <div>
                <div><i class="fa-regular fa-clock"></i></div>
                <div><span>18 Manhattan Avenue, New York</span></div>
            </div>
            <div>
                <div><i class="fa-solid fa-headphones"></i></div>
                <div>
                    <p>Monday to Friday: 9am-9pm
                        Saturday to Sunday: 9am-10pm</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h1>London Store</h1>
            </div>
            <div>
                <div><i class="fa-solid fa-tv"></i></div>
                <div><span>18 Manhattan Avenue, New York</span></div>
            </div>
            <div>
                <div><i class="fa-solid fa-gamepad"></i></div>
                <div><span>bridge@example.com</span></div>
            </div>
            <div>
                <div><i class="fa-regular fa-clock"></i></div>
                <div><span>18 Manhattan Avenue, New York</span></div>
            </div>
            <div>
                <div><i class="fa-solid fa-headphones"></i></div>
                <div>
                    <p>Monday to Friday: 9am-9pm
                        Saturday to Sunday: 9am-10pm</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h1>Larkhall Store</h1>
            </div>
            <div>
                <div><i class="fa-solid fa-tv"></i></div>
                <div><span>18 Manhattan Avenue, New York</span></div>
            </div>
            <div>
                <div><i class="fa-solid fa-gamepad"></i></div>
                <div><span>bridge@example.com</span></div>
            </div>
            <div>
                <div><i class="fa-regular fa-clock"></i></div>
                <div><span>18 Manhattan Avenue, New York</span></div>
            </div>
            <div>
                <div><i class="fa-solid fa-headphones"></i></div>
                <div>
                    <p>Monday to Friday: 9am-9pm
                        Saturday to Sunday: 9am-10pm</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../scroll_up/scroll.php');
    include('../footer/footer.php');
    ?>
    <script src="./store_location.js"></script>
</body>

</html>