<?php

require_once '../config/connect.php';
print_r($_POST);
$id = $_POST['id'];

$body = $_POST['body'];

mysqli_query($connect, "INSERT INTO `comments` (`id`, `product_id`, `body`) VALUES (NULL , '$id', '$body')");



header('Location:/product.php?id='.$id);