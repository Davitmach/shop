<?php
include('../../mysql/mysql.php');

// Проверяем, был ли запрос методом POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Получаем данные из формы
    $message = $_POST['Text'];
    $email = $_POST['Email'];
    $name = $_POST['Name'];

    // Проверяем, что все данные были переданы
    if (!empty($message) && !empty($email) && !empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Подготавливаем SQL-запрос
        $sql = "INSERT INTO `contact`(`id`, `message`, `name`, `email`) VALUES (NULL, '$message', '$name', '$email')";

        // Выполняем запрос
        if (mysqli_query($connect, $sql)) {
            // Перенаправляем пользователя на страницу terms.php
            header('Location: ../terms.php');
            exit; // Важно завершить выполнение скрипта после перенаправления
        } else {
            echo "<script>alert('Error')</script>";
            header('Location: ../terms.php');
        }
    }
    else {
        header('Location: ../terms.php');
    }
} 
else {
    header('Location: ../terms.php');
}
