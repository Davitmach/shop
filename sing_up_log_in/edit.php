<?php
include('../mysql/mysql.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id']; // Получаем ID пользователя из формы
    $file = mysqli_real_escape_string($connect, $_FILES['file']['name']);
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $lastName = mysqli_real_escape_string($connect, $_POST['lastname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);


    // Обновление данных в базе данных
    $sql = "UPDATE `users` SET `img`='$file',`name`='$name',`lastname`='$lastName',`email`='$email', `password` = '$password' WHERE `id`='$id'";
    if (mysqli_query($connect, $sql)) {
        // Если запрос выполнен успешно
        if (!empty($file)) {
            $targetDir = "../uploads/";
            $targetPath = $targetDir . $file;
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
                echo "<script>alert('Data updated successfully')</script>";
                header("location:page.php");
                exit(); // Для прекращения дальнейшего выполнения скрипта
            } else {
                echo "<script>alert('Failed to upload image.')</script>";
            }
        } else {
            echo "<script>alert('Data updated successfully')</script>";
            header("location:page.php");
            exit(); // Для прекращения дальнейшего выполнения скрипта
        }
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}


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
<?php
$id = $_GET['id'];
$sqlUser = mysqli_query($connect,"SELECT * FROM `users` WHERE `id` = '$id'");
$row = mysqli_fetch_assoc($sqlUser);
?>
<body>
    <h2>Welcome to Update Data</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id">
        <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $row['name']?>">
        <input type="text" name="email" placeholder="Email"value="<?php echo $row['email']?>">
        <input type="password" name="password" placeholder="Password">
        <input type="file" name="file">
        <input type="submit" value="Update">
    </form>
</body>

</html>