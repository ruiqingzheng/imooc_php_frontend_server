<?php

include(__DIR__. '/Controller.php');
include(__DIR__ . '/../model/Products.php');


class ProductsController extends Controller
{

    protected $productsModel;

    function __construct($controller_name, $conn)
    {
        parent::__construct($controller_name);
        $this->productsModel = new Products($conn);
    }

    function index()
    {

        $errors = array('product_name' => '', 'product_price' => '', 'product_image' => '');
        if (isset($_POST['submit'])) {


            if (empty($_POST['product_name'])) {
                // 给予表单验证错误提示信息
                $errors['product_name'] = "产品名称不能为空";

            } else {
                $product_name = $_POST['product_name'];
            }

            if (empty($_POST['product_price'])) {
                $errors['product_price'] = "产品价格不能为空";
            } elseif (!is_numeric($_POST['product_price'])) {
                $errors['product_price'] = "产品价格必须为数字";
            } else {
                $product_price = $_POST['product_price'];
            }

            if (empty($_POST['product_image'])) {
                $errors['product_image'] = '请输入产品图片链接地址';
            } else {
                $product_image = $_POST['product_image'];
            }



            // array_filter 只要有数组元素非空， 那么返回真
            if (array_filter($errors)) {
                // 如果提交数据存在错误，非空 ， 那么不保存任何数据

            } else {
                // 如果有错误会抛出异常
                try {
                    $this->productsModel->create($product_name, $product_price, $product_image);
//            echo "success";
                } catch (Exception $exception) {
                    echo $exception->getMessage();
                }
            }

        }



        $products = $this->productsModel->getAll();
        $this->assign('products', $products);
        $this->assign('errors', $errors);


        $view_file = VIEWDIR . 'productsIndex.php';
        $this->display($view_file);
    }
}

?>
