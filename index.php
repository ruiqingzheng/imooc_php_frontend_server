<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['product_name'])) {
        // 给予表单验证错误提示信息
        $errors['product_name'] = "产品名称不能为空";

    } else {
        $product_name = $_POST['product_name'];
    }

    if (empty($_POST['product_price'])) {
        $errors['product_price'] = "产品价格不能为空";
    } else {
        $product_price = $_POST['product_price'];
    }

    if (empty($_POST['product_image'])) {
        $errors['product_image'] = '请输入产品图片链接地址';
    } else {
        $product_image = $_POST['product_image'];
    }


    if (count($errors)) {
        // 如果提交数据存在错误，那么不保存任何数据
    } else {
        // 保存数据到数据库

    }

    echo " $product_name ---- $product_price ---- $product_image ---";


}
?>

<!doctype html>
<html lang="en">
<?php include("./templates/header.php"); ?>

<div class="container" style="min-height: 600px ">

    <section class="container grey-text">
        <h4 class="center teal-text"> 添加商品</h4>
        <form method='post' action="<?php echo $_SERVER['PHP_SELF'] ?>">

            <label for="product_name">名称</label>
            <input type="text" name="product_name" placeholder="">
            <div class="red-text"><?php echo $errors['product_name']; ?></div>

            <label for="product_price">价格</label>
            <input type="text" name="product_price">
            <div class="red-text"><?php echo $errors['product_price']; ?></div>

            <lable for="product_image">图片</lable>
            <input type="text" name="product_image" value="https://www.baidu.com/img/baidu_resultlogo@2.png">
            <div class="red-text"><?php echo $errors['product_image']; ?></div>

            <div class="center">
                <input type="submit" name="submit" value="提交" class="btn brand z-depth-0">
            </div>
        </form>


    </section>


</div>

<?php include('./templates/footer.php') ?>

</html>
