<?php use yii\helpers\Url; ?>
<div class="container">
    <h2 style="text-align:center;">Результаты поиска <?= $search ?></h2>
        
    <div class="row justify-content-center">
        <?php if($goods) {
           foreach($goods as $good) { ?>
            <div class="col-4">
                <div class="product">
                    <div class="product-img">
                        <img src="../img/<?= $good['img']; ?>" alt="<?= $good['name']; ?>">
                    </div>
                    <div class="product-name"><?= $good['name']; ?></div>
                    <div class="product-descr">Состав: <?= $good['composition']; ?></div>
                    <div class="product-price">Цена: <?= $good['price']; ?> рублей</div>
                    <div class="product-buttons">
                        <button type="button" class="product-button__add btn btn-success">Заказать</button>
                        <a href="<?=Url::to(['good/index', 'name' => $good['link_name']]) ?>" type="button" class="product-button__more btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        <?php }} else { ?>
            <h2>Ничего не найдено</h2>
        <?php } ?>
        
    </div>
</div>