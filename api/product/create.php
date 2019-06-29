<?php
require __DIR__ . '/../../model/Products.php';
$conn = require(__DIR__ . '/../../db/db_connect.php');

$productModel = new Products($conn);

// file_get_contents 得到的是json字符串, json_decode 后是json对象

$data = json_decode(file_get_contents('php://input'));

try {
    $productModel->create($data->product_name, $data->product_price, $data->product_image);

    // 成功那么输出本条记录， 或者其他成功信息
    echo json_encode(array('message' => 'created, success'));

} catch (Exception $exception) {
    // 错误输出
    echo json_encode(array('message' => 'something wrong'));
}


?>
