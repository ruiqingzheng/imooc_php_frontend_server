<?php

require __DIR__ . '/../../model/Products.php';
$conn = require(__DIR__ . '/../../db/db_connect.php');

$productModel = new Products($conn);

$result = $productModel->getAll();

// 如果结果不为空那么返回json字符串

if (count($result)) {
    echo json_encode($result);
}

?>
