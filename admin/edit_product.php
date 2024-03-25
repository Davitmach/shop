    <?php

    include('../mysql/mysql.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['id'], $_POST['name'], $_FILES['img']['name'], $_POST['price'],$_POST['small_name'], $_POST['akcia'], $_POST['description'], $_POST['type'])) {
            // Получение данных из формы

            $id = mysqli_real_escape_string($connect, $_POST['id']);
            $file = mysqli_real_escape_string($connect, $_FILES['img']['name']);
            $name = mysqli_real_escape_string($connect, $_POST['name']);
            $description = mysqli_real_escape_string($connect, $_POST['description']);
            $price = mysqli_real_escape_string($connect, $_POST['price']);
            $akcia = mysqli_real_escape_string($connect, $_POST['akcia']);
            $type = mysqli_real_escape_string($connect, $_POST['type']);
            $small_name = mysqli_real_escape_string($connect, $_POST['small_name']);

            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($file_extension, $allowed_types)) {
                echo "<script>alert('Only JPG, JPEG, PNG, and GIF files are allowed.')</script>";
                exit;
            }


            $max_file_size = 10 * 1024 * 1024; // 10MB
            if ($_FILES['img']['size'] > $max_file_size) {
                echo "<script>alert('File size exceeds the maximum limit (10MB).')</script>";
                exit;
            }

            // Обновление данных в базе данных
            $sql = "UPDATE `product` SET `name`='$name',`img`='$file',`price`='$price',`Akcia`='$akcia',`description`='$description',`type`='$type',`small_name`='$small_name' WHERE `id` = '$id'";
            if (mysqli_query($connect, $sql)) {

                $targetDir = "../upload_product/";
                $targetPath = $targetDir . $file;
                if (move_uploaded_file($_FILES['img']['tmp_name'], $targetPath)) {
                    echo "<script>alert('Data updated successfully')</script>";
                    header("location:admin.php");
                } else {
                    echo "<script>alert('Failed to upload image.')</script>";
                }
            } else {
                echo "Error: " . mysqli_error($connect);
            }
        } else {
            echo "<script>alert('Please fill all the fields.')</script>";
        }
    }

    // Получение данных пользователя для редактирования
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM `product` WHERE `id`='$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <style>
            form {
                width: 400px;
                height: auto;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-top: 100px;
                padding: 5px;
                gap: 15px;
                position: absolute;
            }

            input {
                width: 100%;
                border-radius: 20px;
                border: none;
                background: gray;
                padding: 10px 20px;
                font-size: 18px;
                outline: none;
                border: 1px solid transparent;
                transition: .4s;
                color: black;
            }

            input:hover {
                background-color: white;
                border: 1px solid gray;
                box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
            }

            input:focus {
                box-shadow: 1px 1px 5px 4px rgba(0, 0, 0, 0.4);
            }

            input::placeholder {
                color: white;
            }

            input:hover::placeholder {
                color: gray;
            }
        </style>
    </head>

    <body>
        <h2>Welcome to Update Data</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="name" placeholder="Name" value='<?php echo $row['name'] ?>'>
            <input type="text" name="price" placeholder="Price" value='<?php echo $row['price'] ?>'>
            <input type="text" name="akcia" placeholder="Akcia" value='<?php echo $row['Akcia'] ?>'>
            <input type="text" name="description" placeholder="description" value='<?php echo $row['description'] ?>'>
            <input type="text" name="type" placeholder="Type" value='<?php echo $row['type'] ?>'>
            <input type="text" name="small_name" placeholder="Small_name" value='<?php echo $row['small_name'] ?>'>
            <input type="file" name="img">
            <input type="submit" value="Update">
        </form>
    </body>

    </html>