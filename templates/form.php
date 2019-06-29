<section class="container grey-text white " style="padding: 20px">

    <h4 class="center teal-text"> 添加商品</h4>
    <form method='post' action="<?php echo $_SERVER['PHP_SELF'] ?>">

        <label for="product_name">名称</label>
        <input type="text" name="product_name" placeholder="名称">
        <div class="red-text"><?php echo $errors['product_name']; ?></div>

        <label for="product_price">价格</label>
        <input type="text" name="product_price" placeholder="价格">
        <div class="red-text"><?php echo $errors['product_price']; ?></div>

        <label for="product_image">图片</label>
        <input type="text" name="product_image" placeholder="图片"
               value="https://www.baidu.com/img/baidu_resultlogo@2.png">
        <div class="red-text"><?php echo $errors['product_image']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="提交" class="btn brand z-depth-0">
        </div>
    </form>
</section>
