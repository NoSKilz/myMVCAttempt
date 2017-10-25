<?php
$newest_games = $controler->newestgames();
?>
<div id="new">
    <p id="n-p">NOVĚ VYDANÉ HRY</p>
    <div id="new-container">
        <?php foreach ($newest_games as $new): ?>
        <a href="?c=produc&v=show&id=<?php echo $new['product_id'] ?>">
            <div class="new-prod">
                <div class="flip">
                    <div class="front">
                        <img src="images/<?php echo $new['picture'] ?>" alt="Obrázek pro hru <?php echo $new['product_name'] ?>">
                        <p class="name"><?php echo $new['product_name']; echo "({$new['platform_name']})"; ?></p>
                        <p class="price"><?php $new['price'] ?> Kč</p>
                    </div>
                    <div class="back"><?php echo substr($new['description'],0,200); ?></div>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
    <div id="btn-container">
        <button id="lmbtn" data-offset="8">Načíst další</button>
    </div>
</div>
