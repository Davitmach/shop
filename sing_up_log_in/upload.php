<?php
include('../mysql/mysql.php');
session_start();

$target_dir = '../uploads/';
$img = $_FILES['Img'];
$name = $_POST['Name'];
$lastname = $_POST['Lastname'];
$email = $_POST['Email'];

$password = $_POST['Password'];

if (isset($img) && $img['error'] == 0 && $name && $lastname && filter_var($email, FILTER_VALIDATE_EMAIL) && $password) {
    $file_name = basename($img['name']);
    $target_path = $target_dir . $file_name;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (move_uploaded_file($img['tmp_name'], $target_path)) {
        
        $sql = "INSERT INTO `users`(`id`, `img`, `name`, `lastname`, `email`, `password`) VALUES (NULL,'$target_path','$name','$lastname','$email','$hashed_password')";
      
            if (mysqli_query($connect, $sql)) {
                $_SESSION['loggedInUser'] = [
                    'id' => mysqli_insert_id($connect),
                    'name' => $name,
                    'lastname' => $lastname,
                    'email' => $email,
                    'password' => $hashed_password
                ];

                header('location: login.php');
            } else {
                mysqli_error($connect);
            }
    } else {
        echo "<script>alert('File is not moved')</script>";
        header('location: registration.php');
    }
} else {
    echo "<script>alert('Data not uploaded')</script>";
    header('location: registration.php');
}
mysqli_close($connect);
