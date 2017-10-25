<?php
$best_games=$controler->bestgames();
$i=1;
?>
<div id="best">
    <p id="b-p">NEJPRODÁVANĚJŠÍ HRY</p>
    <?php foreach($best_games as $best): ?>
    <div class="product">
        <a href="?c=produc&v=show&id=<?php echo $best['product_id'] ?>">
            <p class="p-name"><?php echo $i ?>. <?php echo $best['product_name'];echo "  ({$best['platform_name']})"; ?></p>
            <p class="p-price"><?php echo $best['price'] ?> Kč</p>
        </a>
    </div>
    <?php $i++; endforeach; ?>
</div>