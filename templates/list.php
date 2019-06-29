<div class="row">

    <?php foreach($products as $product): ?>

        <div class="col s6 m4">
            <div class="card z-depth-0">
                <img src="<?php echo $product['product_image']?>" >
                <div class="card-content center">
                    <h6>商品名称： <?php echo htmlspecialchars($product['product_name']); ?></h6>
                    <span class="grey-text">
                        价格： <?php echo htmlspecialchars($product['product_price']); ?> 元
                    </span>
                </div>
                <div class="card-action right-align">
                    <a class="brand-text" href="details.php?id=<?php echo $product['id'] ?>">more info</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
