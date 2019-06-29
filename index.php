<?php

define('VIEWDIR', __DIR__ . '/templates/');

$conn = include('./db/db_connect.php');

include('./controller/ProductsController.php');

$productController = new ProductsController('products', $conn);

$productController->index();

// 关闭数据库连接
mysqli_close($conn);
?>


