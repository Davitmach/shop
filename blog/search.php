<?php
include('../mysql/mysql.php');

$searchTerm = $_GET["searchTerm"];

// Запрос к базе данных
$sql = "SELECT * FROM `blog` WHERE title LIKE '%$searchTerm%'";
$result = mysqli_query($connect, $sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

// Отправка данных обратно клиенту в формате JSON
echo json_encode($data);

mysqli_close($connect);
?>
