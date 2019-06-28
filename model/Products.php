<?php

//define('')

class Products
{
    private $_conn;

    public function __construct($conn)
    {
        $this->_conn = $conn;
    }

    public function create($product_name, $product_price, $product_image)
    {
        // 保存数据到数据库
        $product_name = mysqli_real_escape_string($this->_conn, $product_name);
        $product_price = mysqli_real_escape_string($this->_conn, $product_price);
        $product_image = mysqli_real_escape_string($this->_conn, $product_image);

        $sql = "INSERT INTO products(product_name,product_price,product_image) VALUES ('$product_name', '$product_price', '$product_image')";

//        echo $sql;
        if (mysqli_query($this->_conn, $sql)) {
            // 重新加载本页面
//            header('Location: index.php');

        } else {
//            echo 'query error: ' . mysqli_error($conn);
            throw new Exception("保存到数据库发生错误:" . mysqli_error($this->_conn), "error");
        }
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM products ORDER BY created_time;';
        $result = mysqli_query($this->_conn, $sql);
        // 关联数组
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);
        return $products;

    }

}

?>
